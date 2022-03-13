<!-- You can add footer div here -->
<?php 
    $sub_footer = get_field('sub_footer');
    $email_section = get_field('subscribe_email_heading');
    $logo_image = get_field('copyright_logo_image');
    $social_media_sections = get_field('social_media_field');
    $cookie_text = get_field('cookie_text');
?>
<div class="w-full md:max-w-3xl xl:max-w-6xl 2xl:max-w-screen-2xl mx-auto py-8 px-4 lg:px-6">
    <?php if ($sub_footer): ?>
        <!-- Sub Footer -->
        <div class="flex flex-col justify-center items-center py-16">
            <h3 class="text-4.5xl font-black mb-8 text-center"> <?php echo $sub_footer['heading'] ?> </h3>
            <p class="text-lg font-normal mb-8 text-center"><?php echo esc_attr($sub_footer['description']) ?></p>
            <?php if ($sub_footer['button_text']):  ?>
            <a
                href="<?php echo esc_url($sub_footer['button_url']) ?>"
                class="bg-transparent text-black btn-hover-with-svg hover:border-mediumSpringGreen hover:bg-mediumSpringGreen hover:text-black border-4 rounded-lg border-mediumSpringGreen px-6 py-3 flex items-center">
                <span class="mr-2 font-black text-lg"> <?php echo esc_attr($sub_footer['button_text']) ?> </span>
            </a>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <?php if($email_section): ?>
    <div class="flex flex-col justify-center items-center py-16 max-w-subscribe-area mx-auto">
        <div class="text-3xl font-medium"> <?php echo esc_attr(the_field('subscribe_email_heading')) ?></div>
        <div class="py-8 w-full">
            <?php echo do_shortcode('[fluentform id="2"]') ?>
        </div>
    </div>
    <?php endif; ?>
    
    <footer class="flex justify-between flex-row flex-wrap items-center py-2">
        <?php 
            wp_nav_menu( $args = array(
                'menu'              => "footer-menu", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                'menu_class'        => "menu-navigations", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                'container'         => "nav", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
                'container_class'   => "text-black text-xl flex list-none", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
                'container_id'      => "footer-menu", // (string) The ID that is applied to the container.
                'theme_location' => 'footer-menu',
                'items_wrap' => '%3$s'
            ));    
        ?>

        <div class="flex items-center">
            <span class="px-2 text-xl"><?php echo " © " . date("Y") ?>  </span>
            <?php if($logo_image): ?>
            <img class="w-4 h-4" src="<?php echo esc_url($logo_image['url']) ?>" alt="<?php echo esc_attr($logo_image['alt']); ?>" />
            <?php endif; ?>
        </div>

        <div class="flex justify-between">
            <?php if($social_media_sections): ?>
                <?php foreach($social_media_sections as $section): ?>
                    <?php 
                        $social= $section['social_media_image'];
                        $social_uri = $section['url'];
                    ?>
                    <a href="<?php echo esc_url($social_uri) ?>" target="_blank" ref="noreferrer noopener">
                        <img class="w-8 h-auto" src="<?php echo esc_url($social['url']) ?>" alt="<?php echo esc_attr($social['alt']); ?>" />
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </footer>

</div>
<!-- Cookie -->
<?php if( $cookie_text ):?>
<div id="cookie-wrapper" class="hidden w-full fixed bottom-0 left-0 right-0 mx-auto bg-black px-12 py-9 z-50">
    <div class="flex flex-row flex-wrap justify-between items-center w-full gap-4">
        <span class="text-base md:text-xl font-light text-white"><?php echo esc_attr(the_field('cookie_text')); ?></span>
        <div class="flex flex-row">
            <button
                id="cookie-button"
                class="bg-white text-black btn-hover-with-svg border rounded-lg border-white px-6 py-3 flex items-center mr-2">
                <span class="mr-2 font-normal text-lg"> <?php echo esc_attr(the_field('cookie_button_text')); ?> </span>
            </button>

            <a href="<?php echo esc_url(the_field('cookie_link_url')) ?>" class="bg-white text-black btn-hover-with-svg border rounded-lg border-white px-6 py-3 flex items-center text-lg font-normal">
                    <?php echo esc_attr(the_field('cookie_link_text')); ?>
            </a>
        </div>
    </div>
</div>
<?php endif; ?>
<?php wp_footer(); ?>
</body>

</html>