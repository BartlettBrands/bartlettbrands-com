<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

/**
 * Provides methods required for preview to work without customizer options.
 * This only loads when CTC preview is loaded.
 */
class ChildThemeConfiguratorPreview {
    protected $theme;
    protected $original_stylesheet;
    protected $stylesheet;
    protected $template;
    
    public function __construct(){

        add_action( 'setup_theme',   array( $this, 'setup_theme' ) );
        add_filter( 'wp_redirect_status', array( $this, 'wp_redirect_status' ), 1000 );

         // Do not spawn cron (especially the alternate cron) while running the Customizer.
        remove_action( 'init', 'wp_cron' );

        // Do not run update checks when rendering the controls.
        remove_action( 'admin_init', '_maybe_update_core' );
        remove_action( 'admin_init', '_maybe_update_plugins' );
        remove_action( 'admin_init', '_maybe_update_themes' );
    }
    
    public function setup_theme() {
        // are we previewing?
        if ( !wp_verify_nonce( $_GET['preview_ctc'] ) || !current_user_can( 'switch_themes' ) )
            return;
        $this->original_stylesheet = get_stylesheet();
        $this->theme = wp_get_theme( isset( $_GET[ 'stylesheet' ] ) ? $_GET[ 'stylesheet' ] : NULL );
        if ( ! $this->is_theme_active() ):
            add_filter( 'template', array( $this, 'get_template' ) );
            add_filter( 'stylesheet', array( $this, 'get_stylesheet' ) );
            // swap out theme mods with preview theme mods
            add_filter( 'pre_option_theme_mods_' . $this->original_stylesheet, array( $this, 'preview_mods' ) );
        endif;

        // impossibly high priority to test for stylesheets loaded after wp_head()
        add_action( 'wp_print_styles', array( $this, 'test_css' ), 999999 );
        // pass the wp_styles queue back to use for stylesheet handle verification
        add_action( 'wp_footer', array( $this, 'parse_stylesheet' ) );
        send_origin_headers();
        // hide admin bar in preview
        show_admin_bar( false );
    }
    
    /**
     * Retrieves child theme mods for preview
     */        
    public function preview_mods() { 
        if ( $this->is_theme_active() ) return false;
        return get_option( 'theme_mods_' . $this->get_stylesheet() );
    }
    
    public function parse_stylesheet() {
        echo '<script>/*<![CDATA[' . LF;
        global $wp_styles, $wp_filter;
        $queue = implode( "\n", $wp_styles->queue );
        echo 'BEGIN WP QUEUE' . LF . $queue . LF . 'END WP QUEUE' . LF;
        if ( is_child_theme() ):
            // check for signals that indicate specific settings
            $file = get_stylesheet_directory() . '/style.css';
            if ( file_exists( $file ) && ( $styles = @file_get_contents( $file ) ) ):
                // is this child theme a standalone ( framework ) theme?
                if ( defined( 'CHLD_THM_CFG_IGNORE_PARENT' ) ):
                    echo 'CHLD_THM_CFG_IGNORE_PARENT' . LF;
                endif;
                // has this child theme been configured by CTC? ( If it has the timestamp, it is one of ours. )
                if ( preg_match( '#\nUpdated: \d\d\d\d\-\d\d\-\d\d \d\d:\d\d:\d\d\n#s', $styles ) ):
                    echo 'IS_CTC_THEME' . LF;
                endif;
                // is this child theme using the @import method?
                if ( preg_match( '#\@import\s+url\(.+?\/' . preg_quote( get_template() ) . '\/style\.css.*?\);#s', $styles ) ):
                    echo 'HAS_CTC_IMPORT' . LF;
                endif;
            endif;
        else:
            // Check if the parent style.css file is used at all. If not we can skip the parent stylesheet handling altogether.
            $file = get_template_directory() . '/style.css';
            if ( file_exists( $file ) && ( $styles = @file_get_contents( $file ) ) ):
                $styles = preg_replace( '#\/\*.*?\*\/#s', '', $styles );
                if ( !preg_match( '#\s*([\[\.\#\:\w][\w\-\s\(\)\[\]\'\^\*\.\#\+:,"=>]+?)\s*\{(.*?)\}#s', $styles ) ):
                    echo 'NO_CTC_STYLES' . LF;
                endif;
            endif;
        endif;
        /**
         * Use the filter api to determine the parent stylesheet enqueue priority
         * because some themes do not use the standard 10 for various reasons.
         * We need to match this priority so that the stylesheets load in the correct order.
         */
        echo 'BEGIN CTC IRREGULAR' . LF;
        // Iterate through all the added hook priorities
        foreach ( $wp_filter[ 'wp_enqueue_scripts' ] as $priority => $arr ):
            // If this is a non-standard priority hook, determine which handles are being enqueued.
            // These will then be compared to the primary handle ( style.css ) 
            // to determine the enqueue priority to use for the parent stylesheet. 
            if ( $priority != 10 ):
                // iterate through each hook in this priority group
                foreach ( $arr as $funcarr ):
                    // clear the queue
                    $wp_styles->queue = array();
                    // now call the hooked function to populate the queue
                    if ( !is_null($funcarr['function']) )
                        call_user_func_array( $funcarr[ 'function' ], array() );
                endforeach;
                // report the priority, and any handles that were added
                if ( !empty( $wp_styles->queue ) )
                    echo $priority . ',' . implode( ",", $wp_styles->queue ) . LF;
            endif;
        endforeach;
        echo 'END CTC IRREGULAR' . LF;
        echo ']]>*/</script>' . LF;
    }
    
    // enqueue dummy stylesheet with extremely high priority to test wp_head()
    public function test_css() {
        wp_enqueue_style( 'ctc-test', get_stylesheet_directory_uri() . '/ctc-test.css' );
    }
    
    public function woocommerce_unforce_ssl_checkout( $bool ){
        return FALSE;
    }

    public function wp_redirect_status( $status ) {
        return 200;
    }
    
    public function is_theme_active() {
        return $this->get_stylesheet() == $this->original_stylesheet;
    }
    
    public function get_template() {
        return $this->theme()->get_template();
    }
    
    public function get_stylesheet() {
        return $this->theme()->get_stylesheet();
    }
    
    
    public function theme() {
        return $this->theme;
    }
    
}
    
new ChildThemeConfiguratorPreview();
