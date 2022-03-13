<?php
/**
 * Template Name: Home Page
 * Template Post Type: page
 *
 */
get_header();
?>
<!-- Hero Section -->
<?php 
    $hero = get_field('hero_section');
    $section2 = get_field('section_2');
    $section3 = get_field('section_3');
    $repeaters_section3 = $section3['info_box'];
    $section4 = get_field('section_4');
    $repeaters_section4 = $section4['transactions_slider'];
    $section5 = get_field('section_5');
    $repeaters_section5 = $section5['info_box'];
?>
<div class="w-full md:max-w-3xl xl:max-w-6xl 2xl:max-w-screen-2xl mx-auto">
    <!--  Hero Section -->
    <div id="section-hero-home" class="flex justify-center items-center py-16 xl:py-28 w-full">
        <div class="flex flex-col">
            <h1 class="text-center mb-8 hero-heading-home"> <?php echo $hero['heading']; ?> </h1>
            <p class="text-xl text-center"><?php echo $hero['paragraph']; ?></p>
        </div>
    </div>

    <!--  Section 2 -->
    <div id="section-2-home" class="flex flex-col justify-center items-center py-16 w-full gap-14 px-4">
        <h2 class="text-center"><?php echo $section2['heading'] ?></h2>

        <div class="flex flex-row flex-wrap md:flex-nowrap justify-between gap-12 w-full">
            <div class="w-full md:w-1/2">
                <img class="object-cover w-full h-full" src="<?php echo esc_url($section2['image']['url']); ?>" alt="<?php echo esc_attr($section2['image']['alt']) ?>">
            </div>
            <div class="w-full md:w-1/2 py-5">
                <?php echo $section2['excerpt'];  ?>
            </div>
        </div>
    </div>

    <!-- Section 3 -->
    <div class="flex flex-col justify-center items-center py-16 w-full gap-14 text-center px-4">
        <div class="flex flex-col">
            <h2 class="mb-8"> <?php echo $section3['heading']; ?> </h1>
            <p class="text-base"><?php echo $section3['excerpt']; ?></p>
        </div>

        <div id="section-3" class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2 justify-between gap-5">
            <?php foreach( $repeaters_section3 as $repeater_section3): ?>
                <div class="p-6 border border-black w-full h-full flex flex-col items-center rounded-xl">
                    <img class="w-full h-auto xl:h-80 mb-10" src="<?php echo esc_url($repeater_section3['image']['url']); ?>" alt="<?php echo esc_attr($repeater_section3['image']['alt']); ?>" />
                    <h3 class="mb-6"><?php echo $repeater_section3['heading'] ?></h3>
                    <div class="text-lg text-left"><?php echo $repeater_section3['description'] ?></div>
                </div>
                
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Section 4 -->

    <div class="flex flex-col justify-center items-center py-16 w-full gap-14 text-center overflow-hidden relative px-4">
        <div class="flex flex-col">
            <h2 class="mb-8"> <?php echo $section4['heading']; ?> </h2>
        </div>

        <div class="overflow-hidden relative w-full">
            <div class="flex items-center wrapper-moving-logo">
                <div class="fade"></div>
                <div class="fade_right"></div>
                <div class="moving-logo">
                    <?php foreach( $repeaters_section4 as $repeater_section4): ?>
                        <div class="flex flex-row justify-center items-center px-4">
                            <div class="mr-2">
                                <img class="w-full min-w-fit h-auto select-none" src="<?php echo esc_url($repeater_section4['company_logo']['url']); ?>" alt="<?php echo esc_attr($repeater_section4['company_logo']['alt']); ?>" />
                            </div>
                            <div class="text-left">
                                <h4 class="text-base mb-1"><?php echo $repeater_section4['company_name'] ?></h4>
                                <p class="text-sm mb-0"><?php echo $repeater_section4['company_description'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                
                <div class="moving-logo2">
                    <?php foreach( $repeaters_section4 as $repeater_section4): ?>
                        <div class="flex flex-row justify-center items-center px-4">
                            <div class="mr-2">
                                <img class="w-full min-w-fit h-auto select-none" src="<?php echo esc_url($repeater_section4['company_logo']['url']); ?>" alt="<?php echo esc_attr($repeater_section4['company_logo']['alt']); ?>" />
                            </div>
                            <div class="text-left">
                                <h4 class="text-base mb-1"><?php echo $repeater_section4['company_name'] ?></h4>
                                <p class="text-sm mb-0"><?php echo $repeater_section4['company_description'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        
        <a
            href="<?php echo esc_url($section4['button_url']) ?>"
            class="bg-transparent text-black btn-hover-with-svg hover:bg-black hover:text-white rounded-lg border border-black px-6 py-3 flex items-center">
            <span class="mr-2 font-black text-lg"> <?php echo esc_attr($section4['button_text']) ?> </span>
            <svg class="fill-black" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M1.125 9C1.125 11.0886 1.95469 13.0916 3.43153 14.5685C4.90838 16.0453 6.91142 16.875 9 16.875C11.0886 16.875 13.0916 16.0453 14.5685 14.5685C16.0453 13.0916 16.875 11.0886 16.875 9C16.875 6.91142 16.0453 4.90838 14.5685 3.43153C13.0916 1.95469 11.0886 1.125 9 1.125C6.91142 1.125 4.90838 1.95469 3.43153 3.43153C1.95469 4.90838 1.125 6.91142 1.125 9V9ZM18 9C18 11.3869 17.0518 13.6761 15.364 15.364C13.6761 17.0518 11.3869 18 9 18C6.61305 18 4.32387 17.0518 2.63604 15.364C0.948212 13.6761 0 11.3869 0 9C0 6.61305 0.948212 4.32387 2.63604 2.63604C4.32387 0.948212 6.61305 0 9 0C11.3869 0 13.6761 0.948212 15.364 2.63604C17.0518 4.32387 18 6.61305 18 9V9ZM5.0625 8.4375C4.91332 8.4375 4.77024 8.49676 4.66475 8.60225C4.55926 8.70774 4.5 8.85082 4.5 9C4.5 9.14918 4.55926 9.29226 4.66475 9.39775C4.77024 9.50324 4.91332 9.5625 5.0625 9.5625H11.5796L9.16425 11.9767C9.11195 12.029 9.07047 12.0911 9.04216 12.1595C9.01386 12.2278 8.99929 12.301 8.99929 12.375C8.99929 12.449 9.01386 12.5222 9.04216 12.5905C9.07047 12.6589 9.11195 12.721 9.16425 12.7733C9.21655 12.8255 9.27864 12.867 9.34697 12.8953C9.4153 12.9236 9.48854 12.9382 9.5625 12.9382C9.63646 12.9382 9.7097 12.9236 9.77803 12.8953C9.84636 12.867 9.90845 12.8255 9.96075 12.7733L13.3358 9.39825C13.3881 9.346 13.4297 9.28393 13.4581 9.21559C13.4864 9.14725 13.501 9.07399 13.501 9C13.501 8.92601 13.4864 8.85275 13.4581 8.78441C13.4297 8.71607 13.3881 8.654 13.3358 8.60175L9.96075 5.22675C9.90845 5.17445 9.84636 5.13297 9.77803 5.10466C9.7097 5.07636 9.63646 5.06179 9.5625 5.06179C9.48854 5.06179 9.4153 5.07636 9.34697 5.10466C9.27864 5.13297 9.21655 5.17445 9.16425 5.22675C9.11195 5.27905 9.07047 5.34114 9.04216 5.40947C9.01386 5.4778 8.99929 5.55104 8.99929 5.625C8.99929 5.69896 9.01386 5.7722 9.04216 5.84053C9.07047 5.90886 9.11195 5.97095 9.16425 6.02325L11.5796 8.4375H5.0625Z"
                    />
            </svg>
        </a>      
    </div>


    <!-- Section 5 -->
    <div class="flex flex-col justify-center items-center py-16 w-full gap-14 text-center px-4">
        <div class="flex flex-col">
            <h2 class="mb-8"> <?php echo $section5['heading']; ?> </h1>
            <p class="text-base"><?php echo $section5['paragraph']; ?></p>
        </div>

        <div class="grid grid-cols-1 xl:grid-cols-3 justify-between gap-5">
            <?php foreach( $repeaters_section5 as $repeater_section5): ?>
                <div class="p-6 border border-black rounded-xl w-full h-full">
                    <img class="w-full h-auto xl:h-80 mb-10" src="<?php echo esc_url($repeater_section5['image']['url']); ?>" alt="<?php echo esc_attr($repeater_section5['image']['alt']); ?>" />
                    <h3 class="mb-6"><?php echo $repeater_section5['heading'] ?></h3>
                    <div class="text-left text-lg"><?php echo $repeater_section5['description'] ?></div>
                </div>
                
            <?php endforeach; ?>
        </div>

        <a
            href="<?php echo esc_url($section5['button_url']) ?>"
            class="bg-transparent text-black btn-hover-with-svg hover:bg-black hover:text-white border rounded-lg border-black px-6 py-3 flex items-center">
            <span class="mr-2 font-black text-lg"> <?php echo esc_attr($section5['button_text']) ?> </span>
            <svg class="fill-black" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M1.125 9C1.125 11.0886 1.95469 13.0916 3.43153 14.5685C4.90838 16.0453 6.91142 16.875 9 16.875C11.0886 16.875 13.0916 16.0453 14.5685 14.5685C16.0453 13.0916 16.875 11.0886 16.875 9C16.875 6.91142 16.0453 4.90838 14.5685 3.43153C13.0916 1.95469 11.0886 1.125 9 1.125C6.91142 1.125 4.90838 1.95469 3.43153 3.43153C1.95469 4.90838 1.125 6.91142 1.125 9V9ZM18 9C18 11.3869 17.0518 13.6761 15.364 15.364C13.6761 17.0518 11.3869 18 9 18C6.61305 18 4.32387 17.0518 2.63604 15.364C0.948212 13.6761 0 11.3869 0 9C0 6.61305 0.948212 4.32387 2.63604 2.63604C4.32387 0.948212 6.61305 0 9 0C11.3869 0 13.6761 0.948212 15.364 2.63604C17.0518 4.32387 18 6.61305 18 9V9ZM5.0625 8.4375C4.91332 8.4375 4.77024 8.49676 4.66475 8.60225C4.55926 8.70774 4.5 8.85082 4.5 9C4.5 9.14918 4.55926 9.29226 4.66475 9.39775C4.77024 9.50324 4.91332 9.5625 5.0625 9.5625H11.5796L9.16425 11.9767C9.11195 12.029 9.07047 12.0911 9.04216 12.1595C9.01386 12.2278 8.99929 12.301 8.99929 12.375C8.99929 12.449 9.01386 12.5222 9.04216 12.5905C9.07047 12.6589 9.11195 12.721 9.16425 12.7733C9.21655 12.8255 9.27864 12.867 9.34697 12.8953C9.4153 12.9236 9.48854 12.9382 9.5625 12.9382C9.63646 12.9382 9.7097 12.9236 9.77803 12.8953C9.84636 12.867 9.90845 12.8255 9.96075 12.7733L13.3358 9.39825C13.3881 9.346 13.4297 9.28393 13.4581 9.21559C13.4864 9.14725 13.501 9.07399 13.501 9C13.501 8.92601 13.4864 8.85275 13.4581 8.78441C13.4297 8.71607 13.3881 8.654 13.3358 8.60175L9.96075 5.22675C9.90845 5.17445 9.84636 5.13297 9.77803 5.10466C9.7097 5.07636 9.63646 5.06179 9.5625 5.06179C9.48854 5.06179 9.4153 5.07636 9.34697 5.10466C9.27864 5.13297 9.21655 5.17445 9.16425 5.22675C9.11195 5.27905 9.07047 5.34114 9.04216 5.40947C9.01386 5.4778 8.99929 5.55104 8.99929 5.625C8.99929 5.69896 9.01386 5.7722 9.04216 5.84053C9.07047 5.90886 9.11195 5.97095 9.16425 6.02325L11.5796 8.4375H5.0625Z"
                    />
            </svg>
        </a>
    </div>

</div>
<?php get_footer(); ?>