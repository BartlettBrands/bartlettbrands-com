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
        'filename' => 'bb-splash-colada.jpg',
        'hexcolor' => '#5587a2',
    ),
    1 => array(
        'filename' => 'bb-splash-bravon.jpg',
        'hexcolor' => '#fff',
    ),
    2 => array(
        'filename' => 'bb-splash-camp.jpg',
        'hexcolor' => '#f6d258',
    ),
	3 => array(
        'filename' => 'bb-splash-ipsy.jpg',
        'hexcolor' => '#dcd5e1',
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
        'metaDescription'   => 'We are an award-winning, boutique branding and design agency with expertise in creative brand development.',
        'fbOgImageUrl'      => 'http://bartlettbrands.com/assets/img/brand-logo-alt.png',
    ),
    'Test' => array(
        'url'               => 'index-test',
        'pageType'          => 'unique',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'We are an award-winning, boutique branding and design agency with expertise in creative brand development.',
        'fbOgImageUrl'      => 'http://bartlettbrands.com/assets/img/brand-logo-alt.png',
    ),
    'Projects' => array(
        'url'               => 'work',
        'pageType'          => 'unique',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Award-winning branding and design work from Bartlett Brands, San Francisco’s local boutique agency.',
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
        'htmlBio'           => '<p>I started my career designing novelties and drawing meticulous letterforms at Louise Fili LTD, an award-winning New York City design firm. After following my heart to San Francisco, I spent my formative years directing Global Creative at Bare Escentuals, guiding the brand vision as the company grew from a niche player to one of the top global beauty brands.</p>
                                <p>Heading back to the agency side in 2011, I established myself as a one-woman consultancy dedicated to developing premium beauty brands and captivating marketing campaigns for clients including Sephora, Creed Strategic Imaging (P&G Beauty and Grooming, Fekkai) and The Beauty Company (Resvology, Jenu).</p>
                                <p>Interested in the rapidly evolving digital space, I joined a beauty-meets-tech client, Coterie, whose mission was to change the way women shop for beauty products online. As their founding Creative Director, I lead user experience and design, content development and digital marketing—launching over 60 campaigns for prestige beauty brand partners such as Urban Decay, Dr. Perricone, Butter London and more.</p>
                                <p>In 2013, I combined the sensibility of a boutique design firm, the strategic understanding of big corporate and the “think different” mentality of a tech startup to found Bartlett Brands, an award-winning branding agency. I’ve since strategized, concepted, innovated and directed across every touchpoint for clients ranging from cosmetics to consumables, including Rodan+Fields, Michael Mina Restaurant Group and The Wine Group.</p>
                                <p>Yes—I’m accustomed to wearing many hats and shades of lipstick but always look best with people who are as passionate about their projects as I am about mine.</p>
                                <p>What can you expect from me? I rarely speak with an indoor voice, usually prefer standing to sitting and always promise beautifully creative solutions that are unexpected, relevant and interesting.</p>',
        'urlInstagram'      => 'http://instagram.com/lovebeckybb',
        'urlLinkedin'       => 'http://www.linkedin.com/pub/rebecca-bartlett/4/661/222',
        'urlTumblr'         => 'http://wandererbarcelona.tumblr.com/',
    ),
    'Annette McCormick' => array(
        'url'               => 'annette-mccormick',
        'pageType'          => 'teammate',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Director of Brand Development at Bartlett Brands.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'imgPortraitFull'   => 'assets/img/TEAMMATES/teammate-annette.jpg',
        'imgPortraitSquare' => 'assets/img/TEAMMATES/teammate-annette-square.jpg',
        'jobPosition'       => 'Director, Brand Development',
        'htmlBio'           => '<p>A midwestern girl with big city ambitions, I moved to San Francisco to follow my dreams and thaw out from the cold. After graduating from San Francisco State with a degree in Journalism and Design, I started my career doing advertising design at SF Weekly—including the ever-interesting escort section. After concepting far too many ways to conceal unmentionables, I switched gears and joined Bare Escentuals’ creative department. Directing a team of designers and production artists from concept to counter, I was the one making sure that all packaging, signage, print collateral, videos and event presentations were on-brand and flawless down to the tiniest detail.</p>
                                <p>What can you expect from me? <br>From ideation to production, I do it all—including chasing a running toddler who manages to find all of the sharp corners in a room.</p>',
        'urlInstagram'      => '',
        'urlLinkedin'       => 'http://www.linkedin.com/pub/annette-stansbury-mccormick/56/706/759',
        'urlTumblr'         => '',
    ),
    'Kimberly Brizzolara' => array(
        'url'               => 'kimberly-brizzolara',
        'pageType'          => 'teammate',
        'htmlSpecialName'   => '',
        'metaDescription'   => '',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'imgPortraitFull'   => 'assets/img/TEAMMATES/teammate-kimberly.jpg',
        'imgPortraitSquare' => 'assets/img/TEAMMATES/teammate-kimberly-square.jpg',
        'jobPosition'       => 'Director, Strategy &amp; Editorial',
        'htmlBio'           => '<p>Born and raised in the Big Easy, I followed the irresistible call of palm trees, sunshine, and frisbee golf to Stanford, where I studied Creative Writing as an undergrad—and stayed on to earn an MA in Media Studies. I honed my marketing and conceptual skills on the agency side as a Strategist, Copywriter and Creative Director at Acxiom/Digital Impact, launching captivating campaigns for clients including Kaiser Permanente, Microsoft, GAP, Visa, Wyndham, and L’Oreal. Switching to corporate, I built and directed the Digital Editorial team at Sephora, creating marketing campaigns for Sephora.com, email and the app while developing cross-channel branding for Sephora’s Beauty Insider rewards program, Sephora Collection and new digital products.</p>
                                <p>My work has won over 70 awards—ad:tech, Marketing Sherpa, Media Post, the ADDYs and more—for creative execution and performance. In 2012, I was honored as one of DM News’ <a href="http://www.dmnews.com/thirty-under-30-the-best-and-brightest-young-direct-marketers/article/201425/" target="_blank">Thirty Under 30: The Best and Brightest Young Marketers</a>.</p>
                                <p>What can you expect from me? <br>Stories, stylishly told. Strategies, stunningly executed. Statements, boldly presented. Smiles, consistently spread. And coffee cups, the size of my head.</p>',
        'urlInstagram'      => 'https://instagram.com/kbrizz',
        'urlLinkedin'       => '',
        'urlTumblr'         => '',
    ),
    'Lauren Golik' => array(
        'url'               => 'lauren-golik',
        'pageType'          => 'teammate',
        'htmlSpecialName'   => '',
        'metaDescription'   => '',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'imgPortraitFull'   => 'assets/img/TEAMMATES/teammate-lauren.jpg',
        'imgPortraitSquare' => 'assets/img/TEAMMATES/teammate-lauren-square.jpg',
        'jobPosition'       => 'Associate Art Director',
        'htmlBio'           => '<p>Bouncin’ in the club where the heat is on. All night til the break of dawn. Yep, I’m from Miami. I studied Journalism at the University of Florida before realizing I preferred making a statement with creative designs rather than investigative articles. So I packed up and set off for San Francisco with nothing but my suitcase and my dog. I spent two years freelancing before I landed my first corporate gig at Bare Escentuals, where I was the Lead Designer for the Buxom Brand. Then I moved on down the street to Sephora Kendo and spent two years developing innovative and eye-catching packaging for Marc Jacobs Beauty, Kat Von D and Formula X. I consider myself a print and packaging expert—and I’m passionate about the way branding, packaging and web can be woven together to create a dynamic brand experience.</p>
                                <p>What can you expect from me? A love for design that runs as deep as my love for animals.</p>',
        'urlInstagram'      => '',
        'urlLinkedin'       => '',
        'urlTumblr'         => '',
    ),
    'Carolina Pistone' => array(
        'url'               => 'carolina-pistone',
        'pageType'          => 'teammate',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Graphic Designer at Bartlett Brands.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'imgPortraitFull'   => 'assets/img/TEAMMATES/teammate-carolina.jpg',
        'imgPortraitSquare' => 'assets/img/TEAMMATES/teammate-carolina-square.jpg',
        'jobPosition'       => 'Graphic Designer',
        'htmlBio'           => '<p>With an eclectic perspective developed from life in Argentina, several East Coast states and finally the City by the Bay, my unique style is somewhere between the worldly and the whimsical.</p>
                                <p>As a graduate of The Academy of Art in San Francisco, I started on my path to becoming a multi-disciplined design pro at… Path (the other Facebook). I embrace ingenuity and flexibility with every design challenge. Identity, illustration, packaging, web design, app design and social media marketing—I’m on it.</p>
                                <p>What can you expect from me? <br>Ninja-like design skills and a refreshing millennial perspective. #splash</p>',
        'urlInstagram'      => 'http://instagram.com/_carubi_',
        'urlLinkedin'       => 'https://www.linkedin.com/profile/view?id=141571753&trk=nav_responsive_tab_profile',
        'urlTumblr'         => 'http://clpcm.tumblr.com/',
    ),
    'Nathan Akers' => array(
        'url'               => 'nathan-akers',
        'pageType'          => 'teammate',
        'htmlSpecialName'   => '',
        'metaDescription'   => '',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'imgPortraitFull'   => 'assets/img/TEAMMATES/teammate-nathan.jpg',
        'imgPortraitSquare' => 'assets/img/TEAMMATES/teammate-nathan-square.jpg',
        'jobPosition'       => 'UI/UX, Front End Developer',
        'htmlBio'           => '<p>Hailing from the great state of Florida, I began my career drawing donuts and spaceships for PBS art shows. This experience was critical for getting in and out of art school. After graduating from the University of Florida with a BFA in Graphic Design, I journeyed into piracy (the kind with an eye patch) and then into web development at a time when the internet was young. Now, with a decade of experience as an interface designer and front-end developer, I’ve improved user experiences for all kinds of companies from non-profits (Kiva); to cosmetics (Coterie, Bravon); to a bunch of tech-tastic startups that you’ve never heard of.</p>
                                <p>What can you expect from me? <br>With as many hairstyles as I have colored sneakers, I’ll stay up all night making sure a great design translates to an even greater user experience across every device and platform. Even Internet Explorer (you’re welcome, Mom).</p>',
        'urlInstagram'      => 'https://instagram.com/nathanakers',
        'urlLinkedin'       => 'https://www.linkedin.com/in/nathanakers',
        'urlTumblr'         => '',
    ),
    'Open Positions' => array(
        'url'               => 'assets/img/Open-Position-Manager-Ops-BizDev.pdf',
        'pageType'          => 'teammate',
        'htmlSpecialName'   => '',
        'metaDescription'   => '',
        'fbOgImageUrl'      => '',
        'navIsActive'       => false,
        'imgPortraitFull'   => 'assets/img/TEAMMATES/teammate-openpositions.jpg',
        'imgPortraitSquare' => '',
        'jobPosition'       => 'Join the Team',
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

    'Ipsy' => array(
        'url'               => 'ipsy',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'We got this beauty in the (glam) bag. Insta-aspirational marketing and creative for a bizillion monthly beauty subscribers.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'messaging design marketing',
        'navImg'            => 'assets/img/PROJECTS/ipsy/ipsy-sugarhighness-marketing-design-cover.jpg',
        'navProjectType'    => 'Marketing &amp; Design',
        'client'            => 'Ipsy',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>At Bartlett Brands, we believe that true beauty comes from within. We also believe it comes from using an excessive amount of cosmetics, lotions and potions. So when ipsy, the thriving beauty subscription service founded by YouTube sensation Michelle Phan, asked us to help make their marketing campaigns, copywriting and collateral more gorge—we said, “Sign me up.”</p>
                               <p>We started by concepting more robust storylines for their monthly GlamBags, including detailed photoshoot direction and social activations with Insta-aspirational appeal. We upped the ante on the monthly collateral by developing a collectible (and educational) card game concept. Then, evolving the voice of ipsy to better appeal to their bizillion GlamBag subscribers, we created unique copy for over 250 products and brands. We got this beauty in the bag.</p>',
        'projectServices'   => 'Marketing Campaigns, Copywriting, Collateral',
        'projectSiteName'   => 'ipsy.com',
        'projectSiteUrl'    => 'https://www.ipsy.com/',
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

  'La Mienne' => array(
        'url'               => 'lamienne',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Branding, identity, web design, app creation, emails and more—we made all of La Mienne a truly gorgeous experience.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'branding messaging design marketing',
        'navImg'            => 'assets/img/PROJECTS/lamienne/LaMienne-branding-design-cover.jpg',
        'navProjectType'    => 'Branding &amp; Design',
        'client'            => 'Ella Cora, Inc.',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>Finally. Someone to wait on you so you never have to wait on a beauty appointment again.</p>
                                <p>We summoned our expertise in prestige beauty and premium technology to bring you La Mienne, an on-demand primping and pampering service for the everyday fashionista. Branding, identity, web design, app creation, emails and more—we made all of La Mienne a truly gorgeous experience.</p>
                                <p>Now Bay Area women can call personal makeup artists, hairstylists, and nail experts to their doorsteps with a snap of the fingers—and the tap of an app. It’s beauty as you like it.</p>
                                <p>Bring on the champagne? It’s already brought.</p>',
        'projectServices'   => 'Brand Development, Naming, Identity, Copy, UI/UX, Website Design, Mobile App Design, Marketing Campaigns, Collateral Design, Packaging Design, Photography',
        'projectSiteName'   => 'lamienne.com',
        'projectSiteUrl'    => 'https://www.lamienne.com/',
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

  'Hashed' => array(
        'url'               => 'hashed',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Working as the external creative department for this tech startup, we do everything from app design to marketing copy to hashing over ideas for the greatest promotional t-shirt the tech world has ever seen.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'branding messaging design marketing',
        'navImg'            => 'assets/img/PROJECTS/hashed/hashed_app_branding_design_cover.jpg',
        'navProjectType'    => 'Branding &amp; Design',
        'client'            => 'Wag Ideas, Inc.',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>Instagram and Pinterest banged and had a #baby. Welcome to the world, Hashed.</p>
                                <p>Like any newborn tech startup, Hashed needed Bartlett Brands to help take its first steps as a brand—everything from designing the app and site to bouncing around ideas for the greatest promotional t-shirt the tech world has ever seen. And now that the 3AM feedback requests are finished, we’re continuing to help them grow and develop.</p>',
        'projectServices'   => 'Brand Development, Identity, UI/UX, Website Design, Mobile App Design, Taglines, Copy, Marketing, Collateral Design',
        'projectSiteName'   => 'gethashed.com',
        'projectSiteUrl'    => 'http://www.gethashed.com',
    ),

  'Beauty Booked' => array(
        'url'               => 'beauty-booked',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'BeautyBooked, an online service for booking appointments, came to us for a full-on facelift. We restructured their web experience and gave them a new identity and fresh messaging.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'branding design',
        'navImg'            => 'assets/img/PROJECTS/beauty-booked/bb-webbranding-cover.jpg',
        'navProjectType'    => 'Branding &amp; Design',
        'client'            => 'Beauty Booked',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>BeautyBooked, an online service for booking appointments at upscale salons and spas (pre-vetted by brand partner and beauty expert, Allure.com), came to us for a full-on facelift. Yes, a facelift—not just your surface-level Botox solution.</p>
                                <p>We started by restructuring their web experience and designing a new interface that would make it refreshingly easy to search and book. Then, we applied a topical treatment to give the brand a rosy glow—reviving it with a new identity and fresh messaging.</p>',
        'projectServices'   => 'Branding, Identity, UI/UX, Website',
        'projectSiteName'   => 'beautybooked.com',
        'projectSiteUrl'    => 'http://www.beautybooked.com',
    ),

  'Cubert' => array(
        'url'               => 'cubert',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'BeautyBooked, an online service for booking appointments, came to us for a full-on facelift. We restructured their web experience and gave them a new identity and fresh messaging.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'branding messaging design',
        'navImg'            => 'assets/img/PROJECTS/cubert/cubert-off-the-grid-branding-design-cover.jpg',
        'navProjectType'    => 'Branding &amp; Design',
        'client'            => 'Off the Grid',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>From crate to create, open up to the possibilities.</p>
                                <p>As the branding agency of choice for several distinguished San Francisco-based restaurants and long-time fans of the Off the Grid food truck gatherings (yum), Bartlett Brands was still a bit surprised when Off the Grid asked us to brand… a large metal box.</p>
                                <p>Never one to back down from a challenge, we gave their invention a life of its own. We named it Cubert—and animated the mobile pop-up venue with a friendly personality, an engaging voice and a refreshing design aesthetic alive with possibilities. Then to formally introduce Cubert, we created marketing collateral and built a site as responsive as Cubert himself.</p>',
        'projectServices'   => 'Brand Development, Naming, Taglines, Identity, Website Design, Copy, Collateral Design, Photography',
        'projectSiteName'   => 'cubert.com',
        'projectSiteUrl'    => 'http://www.cubert.com/',
    ),

  'Mina Private Dining' => array(
        'url'               => 'minaprivatedining',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Bartlett Brands was asked to concept and design clever marketing collateral to elevate and celebrate the Mina Group’s new Private Dining offerings. Dine like no one is watching.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'messaging design marketing',
        'navImg'            => 'assets/img/PROJECTS/minaprivatedining/mina-group-private-dining-design-cover.jpg',
        'navProjectType'    => 'Design',
        'client'            => 'Mina Group',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>Dine like no one is watching.</p>
                                <p>Representing the best in San Francsco’s culinary arts, Chef Michael Mina’s award-winning restaurants offer an unforgettable fine dining experience.</p>
                                <p>Bartlett Brands was asked to concept and design clever marketing collateral to elevate and celebrate their new Private Dining offerings. Our tantilizing collateral concept is literally your invitation to dine like no one is watching.</p>',
        'projectServices'   => 'Taglines, Marketing Collateral, Design',
        'projectSiteName'   => 'michaelmina.net',
        'projectSiteUrl'    => 'http://www.michaelmina.net/',
    ),

  'Optical Underground' => array(
        'url'               => 'optical-underground',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'We rebranded Optical Underground, bringing them up to the 21st century with a liberated look and snappy messaging that accentuates the <q>underground</q> aspect of their brand.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'branding design',
        'navImg'            => 'assets/img/PROJECTS/optical-underground/optical_underground_branding_cover.jpg',
        'navProjectType'    => 'Branding &amp; Design',
        'client'            => 'Optical Underground',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>With over a hundred years in the business of helping people see better, Optical Underground was ready for a fresh perspective.</p>
                                <p>With the goal of appealing to San Francisco’s hipsters, tourists and everything in between, we rebranded this local icon, bringing them up to the 21st century with a liberated look and snappy messaging that accentuates the <q>underground</q> aspect of their brand.</p>',
        'projectServices'   => 'Brand Development, Identity Design, Package Design',
        'projectSiteName'   => '',
        'projectSiteUrl'    => '',
    ),

    'Michael Mina Tailgate' => array(
        'url'               => 'michael-mina-tailgate',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Bourbon Pub is the official host of the NFL’s most extravagant tailgate party. We ran this one in for a touchdown with a witty brand concept that translated to collateral, retail swag and an advertising campaign.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'branding messaging design marketing',
        'navImg'            => 'assets/img/PROJECTS/michael-mina-tailgate/mt-menu-cover.jpg',
        'navProjectType'    => 'Branding &amp; Advertising',
        'client'            => 'Michael Mina Group',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>For fans of football and food. The insatiable hunger for victory paired with an unrivaled tailgate experience by celebrity chef Michael Mina. Together, we win.</p>
                                <p>Bourbon Pub in Levi’s Stadium (the new home of the 49ers) is the official host of the NFL’s most extravagant tailgate party. We ran this one in for a touchdown with a witty brand concept that translated to collateral, retail swag and an advertising campaign. Game on!</p>',
        'projectServices'   => 'Brand Development, Positioning, Copy, Collateral Design, Advertising Campaign',
        'projectSiteName'   => 'michaelminastailgate.com',
        'projectSiteUrl'    => 'http://michaelminastailgate.com',
    ),

    'Patter' => array(
        'url'               => 'patter',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'The project started as a rebrand and app design for this tech startup, but it quickly became much more. We strategize, wireframe, design, write, brainstorm, pivot, design, strategize, and so on.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'branding messaging design',
        'navImg'            => 'assets/img/PROJECTS/patter/patter-appbranding-cover.jpg',
        'navProjectType'    => 'Branding &amp; Design',
        'client'            => 'Wag Ideas, Inc.',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>Patter’s mission is to make exchanging iPhone photos in collaborative albums easy. And fun. And social. But can be private. Or public. By location. Or just by your interests. Or by your friends’ friends’ interest—right now. Easy, huh?</p>
                                <p>The project started as a rebrand and app design for this tech startup, but it quickly became much more. Like working with any startup client, we wear a lot of hats. We strategize, wireframe, design, write, brainstorm, pivot, design, strategize, and so on.</p>',
        'projectServices'   => 'Brand Development, Identity, UI/UX, Website Design, Mobile App Design, Messaging, Video Art Direction',
        'projectSiteName'   => 'patter.com',
        'projectSiteUrl'    => 'http://www.patter.com',
    ),
    'Bourbon Steak' => array(
        'url'               => 'bourbon-steak',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'With the goal of brand articulation and design refresh, we worked with the Michael Mina Group to define Bourbon Steak’s brand direction and rolled out a fresh design for all collateral.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'branding messaging design',
        'navImg'            => 'assets/img/PROJECTS/bourbon-steak/bs-menu-cover.jpg',
        'navProjectType'    => 'Branding &amp; Design',
        'client'            => 'Michael Mina Group',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>Designed for the man who thinks he’s seen it all (and the woman who actually has), Bourbon Steak proves them all wrong. It’s a rare experience, well done.</p>
                                <p>With the goal of brand articulation and design refresh, we worked with the Michael Mina Group to define Bourbon Steak’s brand direction. First, we developed their positioning and taglines. Then, we built on their newfound swagger—rolling out a fresh design for all collateral.</p>',
        'projectServices'   => 'Brand Development, Positioning, Copy, Collateral Design, Taglines',
        'projectSiteName'   => 'michaelmina.net',
        'projectSiteUrl'    => 'http://www.michaelmina.net',
    ),
    'Bourbon Pub' => array(
        'url'               => 'bourbon-pub',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'We worked with the Michael Mina Group to develop the brand for the new Bourbon Pub in Levi’s Stadium, complete with a guide to the <q>Grade A</q> lifestyle, retail apparel and swag.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'branding messaging design',
        'navImg'            => 'assets/img/PROJECTS/bourbon-steak-and-pub/bsp-menu-cover.jpg',
        'navProjectType'    => 'Branding &amp; Design',
        'client'            => 'Michael Mina Group',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>Cocktails so crafty they spill their own secrets. Steaks so prime they’re in a grade of their own. The new Bourbon Pub in Levi’s Stadium is where you will discover the exception to the exception—a whole new kind of classy.</p>
                                <p>We worked with the Michael Mina Group to develop the Bourbon Pub brand. We created the new rules to old pub etiquette and wrote the Book of Bourbon Pub, a guide to the <q>Grade A</q> lifestyle. Then, we executed the concept on the Pub’s collateral, including retail apparel and swag.</p>',
        'projectServices'   => 'Brand Development, Positioning, Copy, Collateral Design, Taglines',
        'projectSiteName'   => 'michaelmina.net',
        'projectSiteUrl'    => 'http://www.michaelmina.net',
    ),
    'Melissa Fleis Lookbook' => array(
        'url'               => 'melissa-fleis-lookbook',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Partnering with photographer Daniel Castro, we directed, styled and designed Project Runway contestant Melissa Fleis’s recent lookbook. One day you’re in. And the next, you’re out.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'design marketing',
        'navImg'            => 'assets/img/PROJECTS/melissa-fleis-lookbook/mf-lookbook-cover.jpg',
        'navProjectType'    => 'Art Direction &amp; Design',
        'client'            => 'Melissa Fleis',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>One day you’re in. And the next, you’re out.</p>
                                <p>As a top-three finalist on Season 10 of <q>Project Runway</q> and recent contestant on <q>Project Runway All-Stars,</q> it’s safe to say Melissa Fleis is definitely still in. She’s also our neighbor in the creative San Francisco Mission District. We were happy to to keep it local, shooting her recent lookbook at The NWBLK Gallery. Partnering with photographer Daniel Castro, we directed, styled and designed this winner. Tim Gunn, be proud.</p>',
        'projectServices'   => 'Photo Art Direction, Collateral Design',
        'projectSiteName'   => 'melissafleis.com',
        'projectSiteUrl'    => 'http://www.melissafleis.com',
    ),
    'Coterie' => array(
        'url'               => 'coterie',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'As a founding partner and external <q>creative department</q> for Coterie, we did it all—from user interface and site design to content strategy and marketing. What’s in your vanity?',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'branding messaging design marketing',
        'navImg'            => 'assets/img/PROJECTS/coterie/coterie-branding-cover.jpg',
        'navProjectType'    => 'Branding &amp; Design',
        'client'            => 'Coterie',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>Revolutionizing how women discover and shop for beauty products online, Coterie came to us in need of full creative services.</p>
                                <p>As a founding partner and external <q>creative department,</q> we did it all—from user interface and site design to content strategy and marketing—for both versions of Coterie’s unique platform. The first iteration of Coterie was a content-driven flash sales site. The second, a.k.a. The Pivot, is a virtual vanity network where users can select, collect and comment on 700,000+ beauty products. What’s in your vanity?</p>',
        'projectServices'   => 'Brand Development, Naming, Taglines, Identity Design, UI/UX Design, Website Design, Digital Marketing, Collateral Design, Copy',
        'projectSiteName'   => 'coterie.com',
        'projectSiteUrl'    => 'http://www.coterie.com',
    ),
    'RN74' => array(
        'url'               => 'michael-mina-rn74',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'RN74 wanted to infuse some fun into their restaurant’s collateral. Redesigning their menu system, we introduced new brand fonts and updated design elements. Délicieux!',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'design',
        'navImg'            => 'assets/img/PROJECTS/michael-mina-rn74/rn74-menu-cover.jpg',
        'navProjectType'    => 'Menu System',
        'client'            => 'Michael Mina Group',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>You don’t need to know French to understand that a restaurant with over 2,000 bottles of wine is a place ready for a good time. RN74 wanted to infuse some fun into their restaurant’s collateral. Redesigning their menu system, we introduced new brand fonts and updated design elements. Délicieux!</p>',
        'projectServices'   => 'Collateral Design',
        'projectSiteName'   => 'michaelmina.net',
        'projectSiteUrl'    => 'http://www.michaelmina.net',
    ),
    'BareMinerals Branding' => array(
        'url'               => 'bareminerals-branding',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'We took bareMinerals—with three different brand names, five logos, countless fonts and zero brand guide—and overhauled the entire identity system.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'branding design marketing',
        'navImg'            => 'assets/img/PROJECTS/bareminerals-branding/bm-branding-cover.jpg',
        'navProjectType'    => 'Branding &amp; Creative Direction',
        'client'            => 'Bare Escentuals',
        'clientIsInHouse'   => true,
        'projectHtmlDesc'   => '<p>Over the past decade, bareMinerals went from a niche product line to one of the fastest-growing beauty brands at the forefront of the industry. In the midst of massive global expansion, bareMinerals—with three different brand names, five logos, countless fonts and zero brand guide—had a full-on identity crisis.</p>
                                <p>Leveraging the heritage of the logo on the original foundation pot, we redesigned the bareMinerals logo. Then, we overhauled the entire identity system, creating a brand book and style guide. Today, this is the consistent bareMinerals identity around the globe.</p>',
        'projectServices'   => 'Brand Development, Identity Design, Brand Guidelines, Package Design, Photography Art Direction',
        'projectSiteName'   => 'bareescentuals.com',
        'projectSiteUrl'    => 'http://www.bareescentuals.com/',
    ),
    'Buxom Branding' => array(
        'url'               => 'buxom-branding',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => '',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'branding design marketing',
        'navImg'            => 'assets/img/PROJECTS/buxom-branding/buxom-branding-cover.jpg',
        'navProjectType'    => 'Branding &amp; Design',
        'client'            => 'Bare Escentuals',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>It all started as a popular lip gloss with a cult following. Then, Buxom got a now-or-never opportunity to launch as a standalone brand in Sephora.</p>
                                <p>On an impossibly short timeline, we brought the Buxom brand to life. We built an entire POS environment. Then, we positioned, packaged and launched multiple categories of products in rapid succession to fill out the experience. Recognizing the opportunity to tap into Sephora’s younger, edgier market, we gave Buxom a larger-than-life personality with an unapologetic attitude.',
        'projectServices'   => 'Brand Development, Brand Guidelines, Package Design, Photography Art Direction, Video Art Direction, Retail Design Direction',
        'projectSiteName'   => 'bareescentuals.com',
        'projectSiteUrl'    => 'http://www.bareescentuals.com/',
    ),
    'Bare Escentuals Holiday' => array(
        'url'               => 'bare-escentuals-holiday',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Slip into something a little more swanky and indulge in a holiday spiked with pure pleasure. It’s time to party.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'design marketing',
        'navImg'            => 'assets/img/PROJECTS/bare-escentuals-holiday/be-holiday-cover.jpg',
        'navProjectType'    => 'Concept &amp; Creative Direction',
        'client'            => 'Bare Escentuals',
        'clientIsInHouse'   => true,
        'projectHtmlDesc'   => '<p>Your invitation to gorgeous.</p>
                                <p>You’re cordially invited to the beauty bash of the century. Celebrate the season of giving and self-gifting with a fabulous fete of flashy gold and resplendent red. Glimmering lights, ravishing gifts—mix, mingle and be marvelous. Slip into something a little more swanky and indulge in a holiday spiked with pure pleasure. It’s time to party.</p>',
        'projectServices'   => 'Concept Development, Photography Art Direction, Package Design, Retail Design Direction',
        'projectSiteName'   => 'bareescentuals.com',
        'projectSiteUrl'    => 'http://www.bareescentuals.com/',
    ),
    'BareMinerals Matte Foundation' => array(
        'url'               => 'bareminerals-matte-foundation',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Friends with benefits. Matte became popular among the ladies with this quirky campaign that we concepted, wrote and designed to advertise the launch of bareMinerals Matte SPF 15 Foundation.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'messaging design marketing',
        'navImg'            => 'assets/img/PROJECTS/bareminerals-matte-foundation/bm-mattefoundation-cover.jpg',
        'navProjectType'    => 'Concept &amp; Creative Direction',
        'client'            => 'Bare Escentuals',
        'clientIsInHouse'   => true,
        'projectHtmlDesc'   => '<p>Friends with benefits.</p>
                                <p>Matte became popular among the ladies with this quirky campaign that we concepted, wrote and designed to advertise the launch of bareMinerals Matte SPF 15 Foundation. Winning praise from the beauty industry, it was awarded The WWD Beauty Biz Award for <q>Beauty’s Boldest Thinkers</q> in the prestige category.</p>',
        'projectServices'   => 'Conceptual Development, Copy, Marketing Campaign, Collateral Design, Photography Art Direction, Retail Design Direction',
        'projectSiteName'   => 'bareescentuals.com',
        'projectSiteUrl'    => 'http://www.bareescentuals.com/',
    ),
    'Pretty Amazing Lipcolor' => array(
        'url'               => 'bareminerals-pretty-amazing-lipcolor',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Read my lips. This is Pretty Amazing. We captured the spirit of Bare Escentuals Pretty Amazing brand with unique packaging and a playful campaign.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'messaging design marketing',
        'navImg'            => 'assets/img/PROJECTS/bareminerals-pretty-amazing-lipcolor/bm-prettyamazing-cover.jpg',
        'navProjectType'    => 'Concept &amp; Creative Direction',
        'client'            => 'Bare Escentuals',
        'clientIsInHouse'   => true,
        'projectHtmlDesc'   => '<p>Read my lips. This is Pretty Amazing.</p>
                                <p>Be bold, hold your chin high and take a risk for no reason. With the power to inspire the kind of adventures that legends are made of, Pretty Amazing was the first of its kind for Bare Escentuals. We captured the spirit of the brand with unique packaging and a playful campaign.</p>',
        'projectServices'   => 'Concept Development, Marketing Campaign, Package Design, Collateral Design, Photography Art Direction, Retail Design Direction',
        'projectSiteName'   => 'bareescentuals.com',
        'projectSiteUrl'    => 'http://www.bareescentuals.com/',
    ),
    'BareMinerals Skincare' => array(
        'url'               => 'bareminerals-skincare',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'Skincare built on a famous foundation. Powered by dirt, bareMinerals Skincare was the first skincare line ever developed by Bare Escentuals.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'design marketing',
        'navImg'            => 'assets/img/PROJECTS/bareminerals-skincare/bm-skincare-cover.jpg',
        'navProjectType'    => 'Packaging &amp; Photography',
        'client'            => 'Bare Escentuals',
        'clientIsInHouse'   => true,
        'projectHtmlDesc'   => '<p>Skincare built on a famous foundation.</p>
                                <p>Powered by dirt (very <q>active</q> dirt), bareMinerals Skincare was the first skincare line ever developed by Bare Escentuals. Luxurious and feminine, our hand-painted design was inspired by founder Leslie Blodgett’s house in Marin. Modern yet nostalgic, this tactile package portrays its authenticity using elements of the human touch. The photography and marketing campaign tied the product back to its roots (literally).</p>',
        'projectServices'   => 'Package Design, Collateral Design, Photography Art Direction',
        'projectSiteName'   => 'bareescentuals.com',
        'projectSiteUrl'    => 'http://www.bareescentuals.com/',
    ),
    'BareMinerals Eyecolors' => array(
        'url'               => 'bareminerals-eyecolors',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'We developed elevated, sleek packaging and memorable marketing campaigns for new bareMinerals eye color launches. Ready for anything, anywhere.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'messaging design marketing',
        'navImg'            => 'assets/img/PROJECTS/bareminerals-color-cosmetics/bm-colorcosmetics-cover.jpg',
        'navProjectType'    => 'Packaging &amp; Photography',
        'client'            => 'Bare Escentuals',
        'clientIsInHouse'   => true,
        'projectHtmlDesc'   => '<p>Ready for anything, anywhere.</p>
                                <p>bareMinerals, a leading innovator of unique mineral eye colors, expanded its line to include an assortment of easily portable products. We developed elevated, sleek packaging and memorable marketing campaigns for all new launches.</p>',
        'projectServices'   => 'Package Design, Photography Art Direction, Retail Design Direction',
        'projectSiteName'   => 'bareescentuals.com',
        'projectSiteUrl'    => 'http://www.bareescentuals.com/',
    ),

    // PROJECT GROUPS
    'Logos' => array(
        'url'               => 'logos',
        'pageType'          => 'projectGroup',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'From restuarants to apps to fashion brands to eyewear, we have a logo for every occasion.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'branding design',
        'navImg'            => 'assets/img/PROJECTS/logos/logos-cover.jpg',
        'navProjectType'    => 'Design',
    ),

    'Gift Good' => array(
        'url'               => 'giftgood',
        'pageType'          => 'project',
        'htmlSpecialName'   => '',
        'metaDescription'   => 'We turned the gifting tables on the typical holiday agency present by donating our clients’ holiday gifts, volunteer days and other actual necessities to five Bay Area charities focused on helping women.',
        'fbOgImageUrl'      => '',
        'navIsActive'       => true,
        'navSortingClasses' => 'marketing',
        'navImg'            => 'assets/img/PROJECTS/giftgood/giftgood-holiday2015-cover.jpg',
        'navProjectType'    => 'Red, White &amp; Filled With Hope',
        'client'            => 'To All of Them',
        'clientIsInHouse'   => false,
        'projectHtmlDesc'   => '<p>2015 was a good year for Bartlett Brands and for our clients.</p>
                                <p>As the holidays rolled around, we began the typical agency hustle to come up with the world&#39s most incredible client holiday present. After completing a comprehensive audit of our clients’ wants and desires, we realized they had no need for yet another gift basket or any other standard agency swag.</p>
                                <p>We donated what could have been our clients’ gifts to five Bay Area charities focused on helping women and families—in the form of actual necessities as well as volunteer days. Then, we surprised our clients with a Gift Good tote bag filled with hope, instead of a bunch of stuff. Because who needs another organic, artisanal fruitcake handmade with berries locally grown on a sustainable farm anyway?</p>
                                <p>Happy Holidays to our clients and partners. Keep the good going in 2016.</p>',
        'projectServices'   => 'Wish List Donations, Volunteer Days',
        'projectSiteName'   => 'bartlettbrands.com',
        'projectSiteUrl'    => 'http://www.bartlettbrands.com/',
    ),

);

?>

