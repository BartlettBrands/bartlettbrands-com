<?php
// BEGIN SITE-DATA INCLUDES FILE
// @has: page and site arrays
// @requires: nothing


// Site Info
// @var: array
// NOTE - this sets up all basic project-centric data to reuse wherever.
$site = array(
    'site-wide-title'  => 'Bartlett Brands', // this is the Title tag. Keep a space at the end. Thank you.
    'bb-facebook'      => 'http://www.facebook.com/bartlettbrands',
    'bb-patter'        => 'http://instagram.com/bartlettbrands/',
    'bb-pinterest'     => 'http://www.pinterest.com/rbartlettllc/',
    'bb-behance'       => 'https://www.behance.net/bartlettbrands',
    'bb-instagram'     => 'https://www.instagram.com/bartlettbrands/',
    'bb-twitter'       => 'https://twitter.com/Respect_Helga',
    'bb-email'         => 'hello@bartlettbrands.com',
    'bb-linkedin'      => 'https://www.linkedin.com/company/bartlett-brands',
    'bb-snapchat'      => 'https://www.snapchat.com/add/bartlettbrands',
);


// Index Page Images
$bgs = array(
    0 => array(
        'filename' => 'bb-splash-ao2.jpg',
    ),
	1 => array(
        'filename' => 'bb-splash-crabtreeandevelyn.jpg',
    ),
    2 => array(
        'filename' => 'bb-splash-paula.jpg',
    ),
	3 => array(
        'filename' => 'bb-splash-firstday.jpg',
    ),
    4 => array(
        'filename' => 'bb-splash-saucyasian.jpg',
    ),
	5 => array(
        'filename' => 'bb-splash-german-kabirski2.jpg',
    ),
	6 => array(
        'filename' => 'bb-splash-paulaproduct.jpg',
    ),
    7 => array(
        'filename' => 'bb-splash-biossance.jpg',
    ),
	8 => array(
        'filename' => 'bb-splash-german-kabirski.jpg',
    ),
	9 => array(
        'filename' => 'bb-splash-aoproduct.jpg',
    ),
	10 => array(
        'filename' => 'bb-splash-ipsy.jpg',
    ),
	11 => array(
        'filename' => 'bb-splash-superkin.jpg',
    ),
);



// All Pages
// @var: array
//  :name (page name, person name, project name)
//      :url                = file name minus '.php'
//      :pageType           = 'unique', 'teammate', 'project', or 'projectGroup'
//      :metaDescription    = page description. don't use quotes at all. make sure there are no duplicate descriptions.
//      :fbOgImageUrl'      =
$pages = array(
    'Welcome' => array(
        'url'               => 'index',
        'pageType'          => 'unique',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Award-winning branding agency bringing the all-girl power to challenge the status and cut through the quo.',
        'fbOgImageUrl'      => 'http://bartlettbrands.com/assets/img/brand-logo-alt.png',
    ),
    'Test' => array(
        'url'               => 'index-test',
        'pageType'          => 'unique',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Award-winning branding agency bringing the all-girl power to challenge the status and cut through the quo.',
        'fbOgImageUrl'      => 'http://bartlettbrands.com/assets/img/brand-logo-alt.png',
    ),
    'Projects' => array(
        'url'               => 'work',
        'pageType'          => 'unique',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Award-winning branding agency bringing the all-girl power to challenge the status and cut through the quo.',
        'fbOgImageUrl'      => '',
    ),


    // TEAMMATE PAGES
    // in order of appearnace on home page
    // NOTE - teammate pages also include these values
    //  :navIsActive        = 'true' or 'false'
    //  :imgPortraitFull    = url for main profile image
    //  :imgPortraitSquare  = url for square profile image
    //  :jobPosition        = company title
    //  :htmlBio            = html content for the bio
    //  :urlInstagram       = url for profile's instagram (does not have to exist)
    //  :urlLinkedin        = url for profile's linkedin (does not have to exist)
    //  :urlTumblr          = url for profile's tumblr (does not have to exist)
    //  :urlNextProfile     = temporary line, a hard-coded profileUrl for the "next" button
    'Rebecca Bartlett' => array(
        'url'               => 'rebecca-bartlett',
        'pageType'          => 'teammate',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Founder and Creative Director at Bartlett Brands.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'imgPortraitFull'   => 'assets/img/TEAMMATES/teammate-rebecca.jpg',
        'imgPortraitSquare' => 'assets/img/TEAMMATES/teammate-rebecca-square.jpg',
        'jobPosition'       => 'Creative Director',
        'htmlBio'           => '<p>Passionate about the intersection of art and marketing, I graduated from The School of Visual Arts with a BFA and started my career at the renowned New York City design firm, Louise Fili LTD. After following my heart to San Francisco, I spent my formative years directing Global Creative at Bare Escentuals, guiding their brand vision as the company grew from a niche player to one of the top global beauty brands.</p>
                                <p>Heading back to the agency side in 2011, I established myself as a thought-leader in beauty while consulting for clients including Sephora and Creed Strategic Imaging (P&G Beauty and Grooming, Fekkai).</p>
                                <p>Fascinated by the rapid evolution of digital marketing, I took a quick detour to launch a beauty-tech startup, Coterie. As their founding Creative Director, I lead user experience, design, content development and digital marketing—launching over 60 campaigns for prestige beauty brand partners such as Urban Decay, Dr. Perricone, Butter London and more.</p>
                                <p>In 2013, I combined the sensibility of a boutique design firm, the strategic understanding of big corporate and the “move fast and break things” mentality of a tech startup to found Bartlett Brands. I’ve since strategized, concepted, innovated and directed across every touchpoint for clients ranging from cosmetics to consumables.</p>
                                <p>What can you expect from me? I rarely speak with an indoor voice, usually prefer standing to sitting and always promise beautifully creative solutions that are unexpected, relevant and interesting.</p>',
        'urlInstagram'      => 'http://instagram.com/ohlookbitches',
        'urlLinkedin'       => 'http://www.linkedin.com/pub/rebecca-bartlett/4/661/222',
        'urlTumblr'         => '',
    ),
	
	'Vannett Li' => array(
        'url'               => 'vannett-li',
        'pageType'          => 'teammate',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Strategy Director at Bartlett Brands.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'imgPortraitFull'   => 'assets/img/TEAMMATES/teammate-vannett.jpg',
        'imgPortraitSquare' => 'assets/img/TEAMMATES/teammate-vannett-square.jpg',
        'jobPosition'       => 'Strategy Director',
        'htmlBio'           => '<p>A California native that recently returned from the Big Apple, I am a 5&prime; 3 &frac12;&Prime; tall visionary with a firecracker personality. A trend and innovation junkie, my passion is a marriage of business strategy and design. My ability to effortlessly create connections and identify strategic tensions has lead me to award-winning success in revitalizing heritage brands and creating new brands for both giant corporations and startups.</p>
                                <p>My career began in advertising in sunny Los Angeles managing the behemoth Toyota account at Saatchi & Saatchi where I received a comprehensive schooling in digital, print, TV and radio. I made my way back up the coast to Venables Bell & Partners in San Francisco to revive the digital and social experience for ConAgra Foods and Google. Then I transitioned exclusively into strategy at CBA—leading brand development and package design with Nestle, Coffee-mate, Purina, Cree and Michael Mina Group.</p>
                                <p>In 2014, I was lured to New York City via Jones Knowles Ritchie to work on positioning and brand identity systems for Anheuser-Busch InBev, Diageo, Unilever, Mars Chocolate and Walker & Co. Eventually, I transitioned to CBX to lead innovation, brand and research for Hain Celestial, Proximo Spirits, Mission Foods, Lavazza Coffee, Hormel Foods, Boston Beer Company, JM Smucker Company and Big Heart Pets.</p>
                                <p>What can you expect from me? Sunshine mixed with a little bit of hurricane. I&#39;m unconventional, provocative, and honest. I never back down from a challenge and always deliver clear and concise solutions strategically grounded in timeless human truths.</p>',
        'urlInstagram'      => 'https://www.instagram.com/vannettli/',
        'urlLinkedin'       => 'https://www.linkedin.com/in/vannett-li-816ab18/',
        'urlTumblr'         => '',
    ),
	
	'Desiree Marr' => array(
        'url'               => 'desiree-marr',
        'pageType'          => 'teammate',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Director of Copy at Bartlett Brands.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'imgPortraitFull'   => 'assets/img/TEAMMATES/teammate-des.jpg',
        'imgPortraitSquare' => 'assets/img/TEAMMATES/teammate-des-square.jpg',
        'jobPosition'       => 'Copy Director',
        'htmlBio'           => '<p>Born in Alameda, a not-so-tropical island in the San Francisco Bay, I earned a BA in English before booking it to the Big Apple. After studying Fashion Marketing at Parsons School of Design—and paying my dues in the notorious Teen Vogue closet—I enjoyed seven years as a fashion editor and stylist at publications like Lucky, Star, and Life & Style.</p>
                                <p>Switching gears to the dynamic beauty space, I packed up 13 boxes of ankle boots and returned to The Bay where I spent two years as a digital writer for Sephora. Following the launch of Sephora 2.0 and its Canadian counterpart, I transitioned to Sephora Inside JCPenney—directing editorial and creating unique campaigns for almost 600 stores.</p>
								<p>Following the birth of my cute-but-crazy twin boys, I jumped into freelance life—working for big brands like Estee Lauder, Uber, and Urban Decay, as well as for small startups, one-woman shops, you name it. Along the way, I sharpened my branding teeth freelancing for award-winning agencies around the country, including MSLK (New York) and Colony (Los Angeles). I am obsessed with creating the perfect brand voice, cutting through the content clutter, and coming up with clever, get-them-to-buy taglines.</p>
								<p>What can you expect from me? The ability to hit deadlines, nail copy, and shatter expectations. A compelling, conversational writing style. An all-black wardrobe, an ungodly amount of hair, and—of course—emdashes galore.
</p>',
        'urlInstagram'      => '',
        'urlLinkedin'       => 'https://www.linkedin.com/in/desiree-marr-12b373b/',
        'urlTumblr'         => '',
    ),
	
    'Annette McCormick' => array(
        'url'               => 'annette-mccormick',
        'pageType'          => 'teammate',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Director of Creative Services & Production at Bartlett Brands.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'imgPortraitFull'   => 'assets/img/TEAMMATES/teammate-annette.jpg',
        'imgPortraitSquare' => 'assets/img/TEAMMATES/teammate-annette-square.jpg',
        'jobPosition'       => 'Director, Creative Services & Production',
        'htmlBio'           => '<p>A midwestern girl with big city ambitions, I moved to San Francisco to follow my dreams and thaw out from the cold. After graduating from San Francisco State with a degree in Journalism and Design, I started my career doing advertising design at SF Weekly—including the ever-interesting escort section. After concepting far too many ways to conceal unmentionables, I switched gears and joined Bare Escentuals’ creative department. Directing a team of designers and production artists from concept to counter, I was the one making sure that all packaging, signage, print collateral, videos and event presentations were on-brand and flawless down to the tiniest detail.</p>
                                <p>What can you expect from me? <br>From ideation to production, I do it all—including chasing a running toddler who manages to find all of the sharp corners in a room.</p>',
        'urlInstagram'      => '',
        'urlLinkedin'       => 'http://www.linkedin.com/pub/annette-stansbury-mccormick/56/706/759',
        'urlTumblr'         => '',
    ),
	
    'Lauren Golik' => array(
        'url'               => 'lauren-golik',
        'pageType'          => 'teammate',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Associate Art Director at Bartlett Brands.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'imgPortraitFull'   => 'assets/img/TEAMMATES/teammate-lauren.jpg',
        'imgPortraitSquare' => 'assets/img/TEAMMATES/teammate-lauren-square.jpg',
        'jobPosition'       => 'Associate Art Director',
        'htmlBio'           => '<p>Born and raised in Miami, I studied Journalism at the University of Florida before realizing I preferred making a statement with creative designs rather than investigative articles. So I packed up and set off for San Francisco with nothing but my suitcase and my dog. I spent two years freelancing before I landed my first corporate gig at Bare Escentuals, where I was the Lead Designer for the Buxom Brand. Then I moved on down the street to Sephora Kendo and spent two years developing innovative and eye-catching packaging for Marc Jacobs Beauty, Kat Von D and Formula X. I consider myself a print and packaging expert—and I’m passionate about the way branding, packaging and web can be woven together to create a dynamic brand experience.</p>
                                <p>What can you expect from me? A love for design that runs as deep as my love for animals.</p>',
        'urlInstagram'      => '',
        'urlLinkedin'       => '',
        'urlTumblr'         => '',
    ),
	
    'Carolina Pistone' => array(
        'url'               => 'carolina-pistone',
        'pageType'          => 'teammate',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Senior Designer at Bartlett Brands.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'imgPortraitFull'   => 'assets/img/TEAMMATES/teammate-carolina.jpg',
        'imgPortraitSquare' => 'assets/img/TEAMMATES/teammate-carolina-square.jpg',
        'jobPosition'       => 'Senior Designer',
        'htmlBio'           => '<p>With an eclectic perspective developed from life in Argentina, several East Coast states and finally the City by the Bay, my unique style is somewhere between the worldly and the whimsical.</p>
                                <p>As a graduate of The Academy of Art in San Francisco, I started on my path to becoming a multi-disciplined design pro at… Path (the other Facebook). I embrace ingenuity and flexibility with every design challenge. Identity, illustration, packaging, print, digital design and social media marketing—I’m on it.</p>
                                <p>What can you expect from me? <br>A curiosity for anything creative, authentic and instigative. </p>',
        'urlInstagram'      => '',
        'urlLinkedin'       => 'https://www.linkedin.com/profile/view?id=141571753&trk=nav_responsive_tab_profile',
        'urlTumblr'         => '',
    ),
	
	    'Luisa Betancourt' => array(
        'url'               => 'luisa-betancourt',
        'pageType'          => 'teammate',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Graphic Designer at Bartlett Brands.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'imgPortraitFull'   => 'assets/img/TEAMMATES/teammate-luisa.jpg',
        'imgPortraitSquare' => 'assets/img/TEAMMATES/teammate-luisa-square.jpg',
        'jobPosition'       => 'Graphic Designer',
        'htmlBio'           => '<p>Born in Venezuela, I grew up in Miami—and swapped the blazing sun for Karl the Fog when I went to the Academy of Art University for a BFA in Graphic Design. And after a stint working in Barcelona, the Bay beckoned me back.</p>
                                <p>I worked in advertising as an art director and designer at Eleven Inc., Rumble Creative and Pereira O’Dell before finding a new forever home at Bartlett Brands. My love for design stems from variety, possibility and constant change—but branding design is my new forever focus.</p>
                                <p>What can you expect from me? <br>A little bit of everything, with coffee on the side.</p>',
        'urlInstagram'      => '',
        'urlLinkedin'       => 'https://www.linkedin.com/in/betancourtluisa/',
        'urlTumblr'         => '',
    ),
	
    'Helga The Brand Wench' => array(
        'url'               => 'helga',
        'pageType'          => 'teammate',
        'htmlSpecialName'   => 'Helga <br>The Brand Wench',
        'metaDescription'   => 'Spirit Animal at Bartlett Brands.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'imgPortraitFull'   => 'assets/img/TEAMMATES/teammate-helga.jpg',
        'imgPortraitSquare' => 'assets/img/TEAMMATES/teammate-helga-square.jpg',
        'jobPosition'       => 'Spirit Animal',
        'htmlBio'           => '<p>It all started with a traumatic personal branding experience at the hand of an acerbic artist along Route 36. The poorly chosen font, the wrong color ink and the awkward placement on my backside—I knew I had been misbranded. Determined to do better, I made my way west.</p>
                                <p>After reinventing myself with a new name and identity, I entered the profession of Spirit Animal with a fierce determination to prevent individuals and companies from having similar branding misfortunes. After a serendipitous meeting with Bartlett Brands on a <a href="http://us7.campaign-archive1.com/?u=ea8809791249ba98e2379bcb8&id=44ff27eda9&e=[UNIQID]" about="_blank">cold winter’s night</a> in the heart of the Mission, I knew I had found my calling.</p>
                                <p>What can you expect from me? <br>Measuring up at just under one inch, I stand tall atop a tiny platform of judgement. My job is to stay behind and make sure things keep on brand, moving forward according to plan. It’s easy, it just takes work. Respect the brand, no need to be a jerk. #respectthebrand</p>',
        'urlInstagram'      => '',
        'urlLinkedin'       => '',
        'urlTumblr'         => '',
    ),

    // PROJECTS AND PROJECT GROUPS
    // NOTE - The order of projects determines order in navigation
    //  :highlightActive'   = 'true' or 'false' (type without quotes)
    //  :navIsActive'       = 'true' or 'false' (type without quotes)
    //  :navSortingClasses  = choose one or more from "strategy branding messaging design marketing"
    //  :navImg             = main navigation image (not a content image)
    //  :navProjectType     = whatever type(s) of project this is described as
    // CURRENT ORDER is
    // a) work highlights
    // b) alphabetical
    // c) project group types

    // PROJECTS ONLY
    // NOTE - none of these are actually required except 'clientIsInHouse'
    //  :clientName         = name of client. could be the same as the project, but might not be
    //  :clientIsInHouse    = 'true' or 'false' (type without quotes)
    //  :projectServices    = full list of the parts of the project, like "branding, identity, ux, ..."
    //  :projectSiteName    = the name of the url to which you link
    //  :projectSiteUrl     = the url of the client or project link
    //  :projectHtmlDesc    = the project desription using html
	
'German Kabirski' => array(
        'url'               => 'german-kabirski',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Fine art jewelry that is precious and peculiar.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'branding messaging design',
        'navImg'            => 'assets/img/PROJECTS/german-kabirski/german-kabirski-branding-design-cover.gif',
        'navProjectType'    => 'Branding &amp; Design',
        'client'            => 'German Kabirski',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>The Art of Impulse</p>
                               <p>Diamonds may be a basic girl’s best friend but for those with much more eclectic taste in jewelry, German Kabirski is the main madman—turning over every stone to cater to those who go for the bold and bizarre.</p>
                               <p>But with no presence in the US, the Bangkok-based team struggled to get their precious and peculiar designs into (and onto) the hands, wrists and necks of the American consumer.</p>
							   <p>From positioning to art direction, we made German Kabirski’s fine art jewelry stand out in a sea of strange with unconventional branding that’s ready to wear.</p>',
        'projectServices'   => 'Identity, Package Design, Copywriting, Photography Direction, Shipping Experience, Web Design',
        'projectSiteName'   => 'germankabirski.com',
        'projectSiteUrl'    => 'https://www.germankabirski.com',
    ),
	
'First Day' => array(
        'url'               => 'firstday',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'At First Day, Your Health is Second to None.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'branding messaging design',
        'navImg'            => 'assets/img/PROJECTS/firstday/firstday-branding-packaging-cover.jpg',
        'navProjectType'    => 'Branding &amp; Design',
        'client'            => 'First Day',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>Rise Healthy. Shine Strong.</p>
                               <p>Not all vitamins are created equal—and neither are all wellness brands.</p>
                               <p>We brought our A+ game with a brand designed to make the grade for today’s perceptive parents. Reusable, durable packaging that doubles as a kid’s cup. A refill strategy that significantly reduces plastic waste. A cool coloring brochure that creates an immediate Insta unboxing moment. And names like “Daily Enrichments” for the multivitamin Yummy Gummies, so parents feel super smart about their choice.</p>',
        'projectServices'   => 'Brand Development, Positioning, Identity, Package Design, Shipping Experience',
        'projectSiteName'   => 'firstdaylife.com',
        'projectSiteUrl'    => 'https://www.firstdaylife.com',
    ),
	
'Superkin' => array(
        'url'               => 'superkin',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'A getup for greatness designed to dress you—not the bump.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'strategy branding messaging design',
        'navImg'            => 'assets/img/PROJECTS/superkin/superkin-branding-design-cover.jpg',
        'navProjectType'    => 'Branding &amp; Design',
        'client'            => 'Superkin',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>Not a maternity brand.</p>
                               <p>When former “Bloomwell” asked us to rebirth their brand, we took aim—making a pointed statement at overturning outdated conventions of pregnancy.</p>
                               <p>Our strategy? Blasphemy. We made “the bump” take a backseat, and created Superkin, AKA “Not a Maternity Brand.”</p>
							   <p>First, we shifted the narrative to focus on fearless females who want to be well-dressed and well-respected—repositioning Superkin as high tech, low maintenance essentials deliberately designed to dress her, not just her bump. Then we overhauled their words, web and marketing strategy to keep business bumpin.’</p>',
        'projectServices'   => 'Brand Strategy, Positioning, Identity, Copywriting, Photography Direction, Web Design',
        'projectSiteName'   => 'superkin.com',
        'projectSiteUrl'    => 'https://www.superkin.com',
    ),
	
'Biossance' => array(
        'url'               => 'biossance',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Biotech does it better. Squalane-based skincare, designed without compromise.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'strategy branding messaging design marketing',
        'navImg'            => 'assets/img/PROJECTS/biossance/biossance-branding-packaging-cover.jpg',
        'navProjectType'    => 'Branding &amp; Design',
        'client'            => 'Biossance',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>Biology by Nature. Human by Design.</p>
                               <p>Bartlett Brands took Biossance from an average “nature meets science” brand into a standout concept. Sephora called their launch “unprecedented.”</p>
                               <p>Our strategy tapped into the power of simplicity. Using a single ingredient brand story, we introduced squalane oil to the millennial beauty customer in a way that she could instantly understand and remember.</p>
                               <p>Biossance holds themselves to the highest standard of sustainability. Likewise, we didn’t compromise when designing chic packaging in highly recyclable primary components and eco-friendly outer cartons made from sugarcane. Waste? Not.</p>
                               <p>An immediate disruptor, Biossance became one of the top skincare brands in Sephora after just a few weeks.</p>',
        'projectServices'   => 'Brand Strategy, Positioning, Identity, Package Design, Web Design, Fixture Design, In-Store Display, Collateral, Marketing Campaigns, Photography, Video, Email, Social Media, Brand Guidelines',
        'projectSiteName'   => 'biossance.com',
        'projectSiteUrl'    => 'https://www.biossance.com/',
    ),
	
	'Styleseat' => array(
        'url'               => 'styleseat',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Style in a swipe. Trends in a tap.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'strategy branding messaging design',
        'navImg'            => 'assets/img/PROJECTS/styleseat/styleseat-branding-design-cover.jpg',
        'navProjectType'    => 'Branding &amp; Design',
        'client'            => 'Styleseat',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>Best-in-Class, Booked.</p>
                               <p>Since its launch in 2009, Styleseat has become the go-to booking platform for talented stylists and barbers looking to make their businesses go gangbusters.</p>
                               <p>When Styleseat wanted to level up their own look, they turned to us for a targeted strategy and a fierce AF identity. From positioning to digital standards, we unleashed an unapologetically bold brand inspired by go-getting Pros and discerning clients eager to step into their swagger.</p>',
        'projectServices'   => 'Brand Strategy, Positioning, Identity, Copywriting, Photography Direction, Digital Standards',
        'projectSiteName'   => 'styleseat.com',
        'projectSiteUrl'    => 'https://www.styleseat.com/',
    ),
	
'Crabtree & Evelyn' => array(
        'url'               => 'crabtreeandevelyn',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Crabtree & Evelyn’s fearless reinvention brings an iconic brand back from the dead.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'strategy branding messaging design marketing',
        'navImg'            => 'assets/img/PROJECTS/crabtreeandevelyn/crabtreeandevelyn-branding-packaging-cover.jpg',
        'navProjectType'    => 'Branding &amp; Design',
        'client'            => 'Crabtree & Evelyn',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>Born Curious. Grown Wild.</p>
                               <p>Crabtree & Evelyn was always a disruptor. Founded in 1971, the British lifestyle brand started by selling soaps from around the world. Twenty-five years later, having grown to 160 stores in 22 countries, they pioneered a new category of retail and earned their place among the world’s most iconic brands.</p>
                               <p>But, nearly fifty years after their inception, Crabtree & Evelyn’s customer had moved on, product expectations had evolved, standalone retail was declared “dead”—and the brand was as dusty as the rose potpourri in your grandma’s bathroom.</p>
							   <p>It takes leadership with a bold vision and an agency that’s tapped into today to fearlessly reinvent one of the most beloved-then-forgotten brands of our time.</p>
							   <p>Starting with strategy, we revived the brand equity that had made Crabtree & Evelyn unique—and translated it to a new audience through a full brand overhaul that highlights an entirely new product portfolio and stands out in a digital-first environment.</p>
							   <p>Untamed and undomesticated, Crabtree & Evelyn breaks through once again.</p>',
        'projectServices'   => 'Brand Strategy, Positioning, Identity System, Package Design, Copywriting, Photography Direction, Brand Guidelines',
        'projectSiteName'   => 'crabtree-evelyn.com',
        'projectSiteUrl'    => 'https://www.crabtree-evelyn.com/',
    ),
	
'Ao' => array(
        'url'               => 'ao',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Born from Wild Abundance. Cultivated by Cold Process.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'strategy branding messaging design marketing',
        'navImg'            => 'assets/img/PROJECTS/ao/ao-branding-packaging-cover.jpg',
        'navProjectType'    => 'Brand Strategy &amp; Design',
        'client'            => 'Ao Skincare',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>Raw Nature. Refined Skincare.</p>
                               <p>Imagine your skin in its native state of health—perfectly pristine, naked, raw, untouched by the elements.</p>
                               <p>When Ao originally launched, the doctor-led brand focused on the science behind their formulations, but their story didn’t stand out and connect with consumers in a compelling way. Our strategy elevated the raw elements—cold processed active ingredients sourced in the New Zealand wild—and surfaced founder Dr. Gray’s evolutionary approach to skin health. A provocative visual expression and product communication strategy work together to create a brand that’s both wild and cultivated.</p>
							   <p>This is beauty and branding from the brink.</p>',
        'projectServices'   => 'Brand Strategy, Positioning, Identity, Package Design, Web Design, Copywriting, Collateral, Photography, Brand Guidelines',
        'projectSiteName'   => 'aoskincare.com',
        'projectSiteUrl'    => '',
    ),
	
'Bamboo Asia' => array(
        'url'               => 'bambooasia',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Far East Flavors. West Coast Vibes.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'strategy branding messaging design',
        'navImg'            => 'assets/img/PROJECTS/bambooasia/bamboo-asia-branding-design-cover.jpg',
        'navProjectType'    => 'Brand Strategy &amp; Design',
        'client'            => 'Bamboo Asia',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>East Eats West.</p>
                               <p>Bamboo Asia had made its name as a Fi-Di staple for the grab-n-go lunch crowd. But when they were ready to start expanding, they realized the brand wasn’t as fresh as the food.</p>
                               <p>We started with strategy, diving deep into the customer expectations and Bamboo Asia’s unique value proposition. Then we reinvented everything but the food to create a buzz-worthy new concept: Bamboo Asia Far Out Market—a mashup of Far East flavors and West Coast vibes. The new heart-worthy identity and hip interior design have customers lining up—literally. And everyone is hella’ welcome.</p>
							   <p>Love, peace and far out food.</p>',
        'projectServices'   => 'Brand Strategy, Positioning, Identity, Interior Design, Collateral',
        'projectSiteName'   => 'bambooasia.com',
        'projectSiteUrl'    => 'https://www.bambooasia.com',
    ),
	
'Paula’s Choice' => array(
        'url'               => 'paulaschoice',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Skincare that’s a matter of fact.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'all branding messaging design marketing',
        'navImg'            => 'assets/img/PROJECTS/paulaschoice/paulaschoice-branding-design-cover.jpg',
        'navProjectType'    => 'Branding &amp; Marketing',
        'client'            => 'Paula’s Choice',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>Truth in Beauty.</p>
                               <p>Paula Begoun didn’t set out to disrupt the beauty industry. But after 30 years of calling the industry out on their B.S., it’s clear that she was first to make dream creams without their heads in the clouds.</p>
							   <p>Paula’s Choice, a global skincare brand that now features over 300 skincare products, came to us after noting that times had changed and the brand had lost its voice.</p>
							   <p>We strategically repositioned the brand to appeal to the discerning customer who wants radical results—without the high price or the marketing hype. Skincare that is a matter of fact. Then, we redesigned the brand’s identity and marketing approach from the ground up, including developing a full packaging overhaul that makes shopping the assortment easy.</p>',
        'projectServices'   => 'Brand Positioning, Identity, Package Design, Web Design, Brand Guidelines, Digital Standards, Social Media Standards, Collateral, Photography, Video',
        'projectSiteName'   => 'paulaschoice.com',
        'projectSiteUrl'    => 'https://www.paulaschoice.com/',
    ),
	
'Colada Shop' => array(
        'url'               => 'colada',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Come curious, leave Cuban. Washington D.C’s newest coffee concept comes with an add-shot of culture and creativity.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'branding messaging design marketing',
        'navImg'            => 'assets/img/PROJECTS/colada/colada-shop-branding-design-cover.jpg',
        'navProjectType'    => 'Branding &amp; Design',
        'client'            => 'Colada Shop',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>Come curious. Leave Cuban.</p>
                               <p>The coffee ritual is one of the most beloved Cuban traditions. The Colada Shop team ordered an add-shot of creativity from beyond the Beltway, and Bartlett Brands delivered—concepting a brand meant to be as admired as the tradition itself.</p>
                               <p>The intrigue of Cuba provided rich inspiration for the brand’s concept. When designing the space and identity, we borrowed visual language from both the Cuban home and the colorful, distressed streets of Havana—referencing tradition, but with a modern sensibility. We curated a lively interior with colorful tiles, distressed textures and authentically Cuban materials. Then, we whipped up menu designs, packaging and collateral with extra foam and a dash of heart. #ColadaLove</p>',
        'projectServices'   => 'Positioning, Brand Development, Interior Design, Identity, Package Design, Collateral',
        'projectSiteName'   => 'coladashop.com',
        'projectSiteUrl'    => 'https://www.coladashop.com/',
    ),
	
'Saucy Asian' => array(
        'url'               => 'saucyasian',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => '#GetSauced at Saucy Asian with an around-the-world Korean remix.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'strategy branding messaging design marketing',
        'navImg'            => 'assets/img/PROJECTS/saucyasian/saucy-asian-branding-design-cover.gif',
        'navProjectType'    => 'Branding &amp; Design',
        'client'            => 'Saucy Asian',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>Inspired by the Korean street eats he craved after clubbing ’til dawn in Seoul, restaurateur Andrew Shinn put us in the booth to spin a clever concept for his new SF hot spot.</p>
                               <p>We analyzed the unique potential of the Castro location and dug into San Francisco’s food trends to create a hook everyone would remember. Smart brand strategy, standout interior design and an identity that’s meant to be Insta’d upped the volume on Saucy Asian.</p>
                               <p>The fine tune? An around-the-world Korean remix with a Cali kick in the buds. #GetSauced</p>',
        'projectServices'   => 'Brand Strategy, Positioning, Naming, Taglines, Identity, Collateral, Packaging, Interior Design, Photography',
        'projectSiteName'   => 'saucyasian.com',
        'projectSiteUrl'    => 'https://www.saucyasian.com/',
    ),
	
'Da Mario' => array(
        'url'               => 'damario',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Meet la famiglia DaMario. Classically prepared cuisine paired with a classically modern brand concept. #daMariolife',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'branding messaging design',
        'navImg'            => 'assets/img/PROJECTS/damario/damario-branding-design-cover.jpg',
        'navProjectType'    => 'Branding &amp; Design',
        'client'            => 'Da Mario',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>Food is life and life is good.</p>
                               <p>In Dallas, Italian food means pizza served delivery-style. Enter DaMario, located in the The Star (the world headquarters of the Dallas Cowboys). They’re shaking parmesan over those perceptions with classically prepared flavors and a classically modern brand concept.</p>
							   <p>We took our inspiration from the heart of everything Italian: family. Then, we developed a storytelling brand around la famiglia DaMario, complete with an 80-page family saga that pairs with over 500 wine options.</p>',
        'projectServices'   => 'Branding, Positioning, Taglines, Identity, Collateral',
        'projectSiteName'   => 'damariorestaurant.com',
        'projectSiteUrl'    => 'http://www.damariorestaurant.com/',
    ),

'Ipsy' => array(
        'url'               => 'ipsy',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'We got this beauty in the (glam) bag. Insta-aspirational marketing and creative for a bizillion monthly beauty subscribers.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'messaging design marketing',
        'navImg'            => 'assets/img/PROJECTS/ipsy/ipsyshopper-marketing-print-cover.jpg',
        'navProjectType'    => 'Marketing &amp; Design',
        'client'            => 'Ipsy',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>At Bartlett Brands, we believe that true beauty comes from within. We also believe it comes from using an excessive amount of cosmetics, lotions and potions. So when ipsy, the thriving beauty subscription service founded by YouTube sensation Michelle Phan, asked us to help make their marketing campaigns, copywriting and collateral more gorge—we said, “Sign me up.”</p>
                               <p>Robust storylines for their monthly GlamBags. Creative photoshoot direction. Social activations with Insta-aspirational appeal. Monthly collateral for a collectible (and educational) card game concept.
An evolved ipsy voice to better appeal to their bizillion glam bag subscribers. Unique copy for over 250 products and brands. And a super stunning catalog for ipsy’s new cash rewards program. We got this beauty in the bag.</p>',
        'projectServices'   => 'Positioning, Taglines, Messaging, Collateral Design, Photo Direction',
        'projectSiteName'   => 'ipsy.com',
        'projectSiteUrl'    => 'https://www.ipsy.com/',
    ),

'Freya' => array(
        'url'               => 'freya',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Hat Cases for the fashionable nomad.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'branding messaging design marketing',
        'navImg'            => 'assets/img/PROJECTS/freya/freya-branding-design-cover.jpg',
        'navProjectType'    => 'Branding &amp; Design',
        'client'            => 'Freya',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>Trek boldly. Wander wildly. Explore boundlessly.</p>
                               <p>Freya believes that what you carry with you is as important as the places you go. So they created luggage that colors your travels and styles your journey.</p>
                               <p>We brought the bygone elegance of their modern hat boxes into the Insta-era with branding that speaks to women with a lust for experience. An iconic identity, colorful textile designs for the inside of the hat boxes and scarves, and a photoshoot on SF’s infamously foggy beaches with just the right amount of tasteful nudity. Adventure, let’s get it on—carried wherever the wind and untamed imagination takes us.</p>',
        'projectServices'   => 'Positioning, Taglines, Identity, Textile Design, Collateral, Photography',
        'projectSiteName'   => 'thefreyabrand.com',
        'projectSiteUrl'    => 'https://www.thefreyabrand.com/',
    ),

'Naya' => array(
        'url'               => 'naya',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Naya is the first high end breast pump that makes pumping suck less.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'branding messaging design',
        'navImg'            => 'assets/img/PROJECTS/naya/naya-branding-design-cover.jpg',
        'navProjectType'    => 'Branding &amp; Design',
        'client'            => 'Naya',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>Ask any mom. Pumping sucks.</p>
                               <p>Enter Naya and their revolutionary Smart Breast Pump. They discovered that pumping technology hadn’t changed since the 1950’s, yet moms have evolved significantly. So, we put five brains and ten boobs to work making the Naya brand as smart as their hydrocomfort technology.</p>
                               <p>We navigated the sensitive and often volatile terrain of breastfeeding to develop a unifying message that speaks to all moms who want better for their babies—and themselves. Then, we created an elegant brand identity with an easy-to-navigate information architecture. Skillfully sourcing and producing the largest magnetic setup box in the world (literally), we fulfilled the founder’s dreams of the most premium packaging the medical device industry has ever seen.</p>
                               <p>Finally, someone is looking out for mom while she looks out for her baby.</p>',
        'projectServices'   => 'Identity, Taglines, Package Design, Collateral',
        'projectSiteName'   => 'nayahealth.com',
        'projectSiteUrl'    => 'https://www.nayahealth.com/',
    ),

'Patchology' => array(
        'url'               => 'patchology',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Bartlett Brands analyzed Patchology’s market and target customer to give them a modern brand voice and redesigned identity, packaging and digital presence.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'strategy branding messaging design marketing',
        'navImg'            => 'assets/img/PROJECTS/patchology/patchology-website-design-cover.jpg',
        'navProjectType'    => 'Brand Strategy &amp; Design',
        'client'            => 'Patchology',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>Dry skin? Puffy eyes? Dry lips? Put a patch on it. That’s what we said after we tried Patchology’s fast-acting innovations. But a brand that looked like it had been patched up one too many times? That left us with frown lines.</p>
                                <p>Patchology was ready for a full face lift. Starting with Brand Strategy, we analyzed the market and target customer to find the area of opportunity for Patchology. We hit refresh on their product architecture, product names and positioning—and gave them a modern brand voice that speaks their customer’s language. With a redesigned identity, packaging and digital presence, we’re pleased to see the results are paying off with lots of pumped up press, praise from the big retailers and sales. That’s what we call patch-working-it.</p>',
        'projectServices'   => 'Brand Strategy, Product Strategy, Positioning, Brand Development, Package Design, Web Design, Collateral, Marketing Campaigns, Photography, Email',
        'projectSiteName'   => 'patchology.com',
        'projectSiteUrl'    => 'https://www.patchology.com/',
    ),

'Rodan + Fields' => array(
        'url'               => 'randfbrand',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'When skincare company Rodan + Fields needed to redefine its brand, they turned to us for help making a flawless impression.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'strategy branding messaging design marketing',
        'navImg'            => 'assets/img/PROJECTS/randfbrand/RandF-branding-marketing-design-cover.jpg',
        'navProjectType'    => 'Brand Strategy &amp; Creative Direction',
        'client'            => 'Rodan + Fields',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>We all want to put our best faces forward. So when fast-growing skincare company Rodan + Fields needs brand work, marketing and creative direction, they turn to us for help making a flawless impression.</p>
                                <p>Founded by world-renowned dermatologists Dr. Katie Rodan and Dr. Kathy Fields, the creators of Proactiv® Solution, Rodan + Fields already had strong credibility. But they knew that in the competitive world of prestige skincare, it’s essential to have a standout brand story, differentiated product positioning and compelling marketing campaigns.</p>
                                <p>Our work with Rodan + Fields started with Brand Strategy. We led their executive team through a series of workshops to identify and align on the brand fundamentals. We built a comprehensive Brand Book, covering everything from brand equity to templated standards. An elevated voice, new photography and fresh typography—in a world where appearances matter, Rodan + Fields looks amazing.</p>
                                <p>We continue to strategize, concept and execute successful cross-channel campaigns that get audiences excited about new products and real results—the complete regimen for skincare sales success.</p>',
        'projectServices'   => 'Brand Strategy, Brand Development, Product Positioning, Taglines, Brand Standards, Marketing Campaigns, Photography, Video, Content Development, Collateral, Photography, Video, Social Media, Email',
        'projectSiteName'   => 'rodanandfields.com',
        'projectSiteUrl'    => 'https://www.rodanandfields.com/',
    ),

'Bravon Beauty' => array(
        'url'               => 'bravon',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'International makeup artist Bravon Pascua approached us to concept, brand and design his new line of cosmetics.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'branding messaging design marketing',
        'navImg'            => 'assets/img/PROJECTS/bravon/bravon-beauty-cosmetics-branding-cover.jpg',
        'navProjectType'    => 'Branding &amp; Design',
        'client'            => 'Bravon Beauty, LLC',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>When international makeup artist Bravon Pascua approached Bartlett Brands to concept, brand and design his new line of cosmetics, we said "Yes, Please!" Quickly followed by, "Do we get free products?!?"</p>
                                <p>No strangers to the beauty world, we tapped into Bravon’s vision, drawing inspiration from his artistry to develop a bold philosophy that guided everything we created for the brand. From positioning, to shade naming, to package design and copy for over 150 makeup products, to user interface, website design, photography and marketing collateral—we did it all. And not a single mascara-stained tear was shed in the process.</p>',
        'projectServices'   => 'Brand Development, Identity, Naming, Taglines, Copy, Marketing, Collateral Design, Packaging Design, Photography, UI/UX, Website Design',
        'projectSiteName'   => 'bravonbeauty.com',
        'projectSiteUrl'    => 'http://bravonbeauty.com/',
    ),

'Pub 1842' => array(
        'url'               => 'pub-1842',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Commissioned by the MGM Grand to revitalize Michael Mina’s Pub 1842, we did a competitive landscape and customer analysis, strategically rebranded to emphasize the artisan offering, and concepted an advertising campaign.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'strategy branding messaging design marketing',
        'navImg'            => 'assets/img/PROJECTS/pub-1842/pub_1842_branding_marketing_cover.jpg',
        'navProjectType'    => 'Branding &amp; Advertising',
        'client'            => 'MGM Grand, Michael Mina Group',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>Las Vegas, Sin City, where anything can happen. Whether you return home a big winner or with a slightly lighter wallet, under no circumstances should you return home hungry.</p>
                                <p>Commissioned by the MGM Grand to revitalize Michael Mina’s Pub 1842, we realized that in Vegas, food is not something to be gambled on. After doing a competitive landscape and customer analysis, we strategically rebranded Pub 1842 to emphasize their artisan offering. Then, we concepted an advertising campaign to introduce celebrity chef Michael Mina to a new (and distracted) audience. Don’t gamble on your next meal.</p>',
        'projectServices'   => 'Brand Strategy, Brand Development, Positioning, Taglines, Messaging, Photo Direction, Collateral Design, Advertising Campaign',
        'projectSiteName'   => 'michaelmina.net',
        'projectSiteUrl'    => 'http://www.michaelmina.net',
    ),

'Camp Collection' => array(
        'url'               => 'camp',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => '',
        'fbOgImageUrl'      => 'http://bartlettbrands.com/assets/img/PROJECTS/camp/camp-collection-branding-02.jpg',
        'navIsActive'       => true,
        'navSortingClasses' => 'branding messaging design marketing',
        'navImg'            => 'assets/img/PROJECTS/camp/camp-collection-branding-cover.jpg',
        'navProjectType'    => 'Branding &amp; Design',
        'client'            => 'Camp Collection',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>Open the doors and open your mind. We don’t build walls because life is too short to hide inside.</p>
                                <p>Inspired by color wars, contraband and that cute dude from Cabin 14, Camp Collection is a reminder to always blaze your own trail, regardless of where life’s adventures take you.</p>
                                <p>Camp Collection came to us in need of strategic positioning and differentiation from competitive Millennial indoor/outdoor apparel brands. Without removing all the grass stains, we elevated them from camping to glamping with a fresh brand direction and a sassy, free-spirited attitude. #blazeyourowntrail</p>',
        'projectServices'   => 'Brand Development, Positioning, Taglines, Identity Design, Messaging, Photo Direction, Collateral Design',
        'projectSiteName'   => 'shopcamp.com',
        'projectSiteUrl'    => 'http://www.shopcamp.com',
    ),

'Proposition Chicken' => array(
        'url'               => 'proposition-chicken',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Wednesday Seven came to us with their latest foodie concept—a simple restaurant that serves nothing but chicken. We named it, branded it, and made it the catchiest counter concept of Fall 2013.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'branding messaging design',
        'navImg'            => 'assets/img/PROJECTS/proposition-chicken/pc-branding-cover.jpg',
        'navProjectType'    => 'Branding &amp; Design',
        'client'            => 'Wednesday Seven',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>It’s all about choice. Or at least it should be when it comes to eating chicken in San Francisco. When Wednesday Seven came to us with their latest foodie concept—a simple restaurant that serves nothing but chicken—we were tasked with naming it, branding it, and making it the catchiest counter concept of Fall 2013.</p>
                                <p>So what did we do? You could say we went full chicken.</p>
                                <p>As a Platinum Award Winner in the 2015 Graphis Design Annual, this brazen brand continues to receive accolades in Urban Daddy, Thrillist, Eater, and Inside Scoop SF, among others.</p>',
        'projectServices'   => 'Brand Development, Positioning, Naming, Taglines, Identity Design, Collateral Design, Retail Design Direction',
        'projectSiteName'   => 'propositionchicken.com',
        'projectSiteUrl'    => 'http://www.propositionchicken.com',
    ),

'Michael Mina Group' => array(
        'url'               => 'michael-mina-group',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => '',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'branding design messaging marketing',
        'navImg'            => 'assets/img/PROJECTS/michael-mina-group/mina-branding-cover.jpg',
        'navProjectType'    => 'Creative Direction &amp; Guidelines',
        'client'            => 'Michael Mina Group',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>Michelin-starred, James Beard Award-winning Chef Michael Mina knows how to create a dining experience that can make even the crankiest critic turn starry-eyed.</p>
                                <p>We were tasked with helping the Michael Mina Group articulate this special magic at the heart of their 20+ restaurant brands. After taking their team through a branding workshop, we defined the <q>Mina Touch,</q> the foundational elements of their brand equity. Then, we created brand guidelines and acted as creative liaison between multiple agencies, partnering on large initiatives such as the relaunch of their corporate website.</p>',
        'projectServices'   => 'Brand Guidelines, Photo Art Direction, Video Art Direction, Web Design Direction',
        'projectSiteName'   => 'michaelmina.net',
        'projectSiteUrl'    => 'http://www.michaelmina.net',
    ),

    // PROJECT GROUPS
    'Naming' => array(
        'url'               => 'naming',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'What’s in a name? Everything.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'messaging',
        'navImg'            => 'assets/img/PROJECTS/naming/naming-branding-cover.jpg',
        'navProjectType'    => 'Messaging',
        'client'            => '',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>What’s in a name? Everything.</p>
                                <p>It’s your first impression and your constant calling card. No matter what kind of business you’re in, you need a name that stands up and stands out for all the right reasons.</p>
                                <p>When it comes to naming, we whip up our special sauce and serve up names you want to say and shout, wear on a shirt and write in a hashtag. </p>',
        'projectServices'   => 'Naming',
        'projectSiteName'   => '',
        'projectSiteUrl'    => '',
    ),
	
	'Logos' => array(
        'url'               => 'logos',
        'pageType'          => 'projectGroup',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'From restuarants to apps to fashion brands to eyewear, we have a logo for every occasion.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'branding design',
        'navImg'            => 'assets/img/PROJECTS/logos/logos-cover.gif',
        'navProjectType'    => 'Design',
    ),


    'Gift Good' => array(
        'url'               => 'giftgood',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'When the holidays roll around, we ditch the fancy client presents and boozy parties—and show our appreciation by giving back to those who really need it.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'strategy, branding, messaging, design, marketing',
        'navImg'            => 'assets/img/PROJECTS/giftgood/giftgood-cover.gif',
        'navProjectType'    => 'Red, White &amp; Filled With Hope',
        'client'            => 'To All of Them',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>Since 2015, we’ve been ditching the fancy holiday presents and boozy parties—donating what we would have spent on client razzle dazzle to Bay Area charities that support women and children.</p>
                                <p>Then we surprise our clients with a little something fun to get them into the giving spirit too. </p>
                                <p>We call it Gift Good. It’s our tradition to keep the goodness going.</p>',
        'projectServices'   => 'Charity Donations, Volunteer Days',
        'projectSiteName'   => '',
        'projectSiteUrl'    => '',
    ),

);

?>

