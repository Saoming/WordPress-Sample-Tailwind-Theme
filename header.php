<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title><?php the_title(); ?></title>
    <!-- CSS Style + JS -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Add Header Here  -->
<header class="w-full xl:max-w-6xl 2xl:max-w-screen-2xl mx-auto grid justify-between items-center grid-cols-2 py-8 px-2 lg:px-6">
    <div class="w-full">
        <a class="py-3 font-black text-lg lg:text-4xl" href="<?php echo esc_url( get_home_url( null, '/' ) ) ?>">FRONTIER KAPITAL</a>
    </div>

    <!-- Mobile -->
    <div class="flex justify-end items-center lg:hidden">
        <a id="show-menu" href="#" class="px-6 py-3">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.59998 8.39995C3.59998 8.08169 3.7264 7.77647 3.95145 7.55142C4.17649 7.32638 4.48172 7.19995 4.79998 7.19995H19.2C19.5182 7.19995 19.8235 7.32638 20.0485 7.55142C20.2735 7.77647 20.4 8.08169 20.4 8.39995C20.4 8.71821 20.2735 9.02344 20.0485 9.24848C19.8235 9.47352 19.5182 9.59995 19.2 9.59995H4.79998C4.48172 9.59995 4.17649 9.47352 3.95145 9.24848C3.7264 9.02344 3.59998 8.71821 3.59998 8.39995Z" fill="black"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.59998 15.5999C3.59998 15.2816 3.7264 14.9764 3.95145 14.7514C4.17649 14.5263 4.48172 14.3999 4.79998 14.3999H19.2C19.5182 14.3999 19.8235 14.5263 20.0485 14.7514C20.2735 14.9764 20.4 15.2816 20.4 15.5999C20.4 15.9182 20.2735 16.2234 20.0485 16.4484C19.8235 16.6735 19.5182 16.7999 19.2 16.7999H4.79998C4.48172 16.7999 4.17649 16.6735 3.95145 16.4484C3.7264 16.2234 3.59998 15.9182 3.59998 15.5999Z" fill="black"/>
            </svg>
        </a>
    </div>
    <!-- Desktop -->
    <?php if( has_nav_menu('primary')): ?>
    <div class="lg:flex justify-end items-center hidden">
        <?php 
            wp_nav_menu( array(
                'menu'              => "primary", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                'container'         => "nav", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
                'container_class'   => "z-0 flex justify-between text-xl list-none", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
                'container_id'      => "primary", // (string) The ID that is applied to the container.
                'fallback_cb'       => "", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
                'before'            => "", // (string) Text before the link markup.
                'after'             => "", // (string) Text after the link markup.
                'link_before'       => "", // (string) Text before the link text.
                'link_after'        => "", // (string) Text after the link text.
                'theme_location' => 'primary',
                'items_wrap' => '%3$s'
            ) );

            echo do_shortcode('[polylang_langswitcher]');
        ?>
    </div>
    <?php endif; ?>
</header>
<!-- SideBar Navigations -->
<div id="full-screen-nav" class="inactive full-screen-menu relative">
  <div class="flex flex-col flex-wrap justify-center py-32 px-8">
        <?php 
            wp_nav_menu( $args = array(
                'menu'              => "primary", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                'menu_class'        => "menu-navigations", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                'container'         => "nav", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
                'container_class'   => "text-white text-2xl sm:text-5xl", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
                'container_id'      => "primary", // (string) The ID that is applied to the container.
                'theme_location' => 'primary',
            )); 
            echo do_shortcode('[polylang_langswitcher]');   
        ?>
    </div>
    <a id="close-menu" class="absolute top-4 right-4" href="#">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4.57498 4.57492C4.85627 4.29372 5.23774 4.13574 5.63548 4.13574C6.03323 4.13574 6.41469 4.29372 6.69598 4.57492L12 9.87892L17.304 4.57492C17.5869 4.30168 17.9658 4.15049 18.3591 4.15391C18.7524 4.15733 19.1286 4.31508 19.4067 4.59319C19.6848 4.87131 19.8426 5.24752 19.846 5.64082C19.8494 6.03412 19.6982 6.41302 19.425 6.69592L14.121 11.9999L19.425 17.3039C19.6982 17.5868 19.8494 17.9657 19.846 18.359C19.8426 18.7523 19.6848 19.1285 19.4067 19.4066C19.1286 19.6848 18.7524 19.8425 18.3591 19.8459C17.9658 19.8494 17.5869 19.6982 17.304 19.4249L12 14.1209L6.69598 19.4249C6.41308 19.6982 6.03418 19.8494 5.64088 19.8459C5.24759 19.8425 4.87137 19.6848 4.59326 19.4066C4.31514 19.1285 4.15739 18.7523 4.15397 18.359C4.15055 17.9657 4.30175 17.5868 4.57498 17.3039L9.87898 11.9999L4.57498 6.69592C4.29378 6.41463 4.1358 6.03317 4.1358 5.63542C4.1358 5.23768 4.29378 4.85621 4.57498 4.57492V4.57492Z" fill="white"/>
        </svg>
    </a>
</div>
<!-- Newsletter -->
<div id="newsletter-popup" class="news-hide newsletter-wrapper relative">
    <div class="w-full h-full flex flex-col justify-center items-center">
        <div class="center-screen-newsletter relative">
        <?php if(pll_current_language() == 'en'): ?>
            <h3 class="mb-4"> Sign up for my newsletter... </h3>
            <p class="mb-8">The latest articles, podcasts and videos - straight to your inbox.</p>
        <?php else: ?>
            <h3 class="mb-4"> Melden Sie sich für meinen Newsletter an... </h3>
            <p class="mb-8">Die neuesten Artikel, Podcasts und Videos - direkt in Ihren Posteingang.</p>
        <?php endif; ?>
            <?php echo do_shortcode('[fluentform id="3"]'); ?>

            <a id="close-newsletter" class="absolute top-4 right-4" href="#">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.57498 4.57492C4.85627 4.29372 5.23774 4.13574 5.63548 4.13574C6.03323 4.13574 6.41469 4.29372 6.69598 4.57492L12 9.87892L17.304 4.57492C17.5869 4.30168 17.9658 4.15049 18.3591 4.15391C18.7524 4.15733 19.1286 4.31508 19.4067 4.59319C19.6848 4.87131 19.8426 5.24752 19.846 5.64082C19.8494 6.03412 19.6982 6.41302 19.425 6.69592L14.121 11.9999L19.425 17.3039C19.6982 17.5868 19.8494 17.9657 19.846 18.359C19.8426 18.7523 19.6848 19.1285 19.4067 19.4066C19.1286 19.6848 18.7524 19.8425 18.3591 19.8459C17.9658 19.8494 17.5869 19.6982 17.304 19.4249L12 14.1209L6.69598 19.4249C6.41308 19.6982 6.03418 19.8494 5.64088 19.8459C5.24759 19.8425 4.87137 19.6848 4.59326 19.4066C4.31514 19.1285 4.15739 18.7523 4.15397 18.359C4.15055 17.9657 4.30175 17.5868 4.57498 17.3039L9.87898 11.9999L4.57498 6.69592C4.29378 6.41463 4.1358 6.03317 4.1358 5.63542C4.1358 5.23768 4.29378 4.85621 4.57498 4.57492V4.57492Z" fill="white"/>
                </svg>
            </a>
        </div>
    </div>
</div>