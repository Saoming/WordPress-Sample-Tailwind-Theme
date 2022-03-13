<?php
/**
 * Template Name: About Page
 * Template Post Type: page
 *
 */
get_header();
?>
<?php 
    $hero = get_field('hero_section');
    $section2 = get_field('section_2');
    $repeaters_section2 = $section2['image_on_the_left_repeaters'];
    $section3 = get_field('section_3');
    $repeaters_section3 = $section3['image_on_the_right_repeaters'];
    $section4 = get_field('section_4');
?>
<div class="max-w-screen-2xl mx-auto">
    <!--  Hero Section -->
    <div class="max-w-7xl mx-auto flex flex-col justify-center items-center py-16 xl:py-28 w-full">
        <div class="flex flex-col text-center mb-16">
            <h1 class="mb-8"> <?php echo $hero['heading']; ?> </h1>
            <p class="text-xl"><?php echo $hero['paragraph']; ?></p>
        </div>
        <div class="flex flex-col justify-center items-center text-center px-4">
            <div class="about-image-wrapper mb-16">
                <img class="object-cover w-full h-full" src="<?php echo esc_url($hero['image']['url']); ?>" alt="<?php echo esc_attr($hero['image']['alt']) ?>">
            </div>
            <div>
                 <p class="text-xl"><?php echo $hero['text_under_image']; ?></p>
            </div>
        </div>
    </div>

    <!--  Section 2 -->
    <div class="max-w-7xl mx-auto flex flex-col justify-center items-center py-16 w-full gap-14 px-4">
        <h2 class="text-center"><?php echo $section2['heading'] ?></h2>
        
        <?php foreach($repeaters_section2 as $repeater_section2): ?>
            <div class="flex flex-row flex-wrap md:flex-nowrap gap-4 mb-12 justify-center max-w-5xl mx-auto">
            
                <div class="w-full">
                    <img class="object-cover w-full h-auto" src="<?php echo esc_url($repeater_section2['featured_image']['url']); ?>" alt="<?php echo esc_attr($repeater_section2['featured_image']['alt']); ?>" />
                </div>

                <div class="w-full flex flex-col">
                    <p class="text-xl"><?php echo $repeater_section2['description'] ?></p>
                </div>

            </div>
        <?php endforeach; ?>
    </div>

    <!--  Section 3 -->
    <div class=" max-w-7xl mx-auto flex flex-col justify-center items-center py-16 w-full gap-14 px-4">
        <h2 class="text-center"><?php echo $section3['heading'] ?></h2>
        
        <?php foreach($repeaters_section3 as $repeater_section3): ?>
            <div class="flex flex-row flex-wrap lg:flex-nowrap gap-4 mb-12 justify-center max-w-5xl mx-auto">
            
            <div class="w-full flex flex-col">
                <p class="text-xl"><?php echo $repeater_section3['description'] ?></p>
            </div>

            <div class="w-full">
                <img class="object-cover w-full h-auto" src="<?php echo esc_url($repeater_section3['featured_image']['url']); ?>" alt="<?php echo esc_attr($repeater_section2['featured_image']['alt']); ?>" />
            </div>

        </div>
        <?php endforeach; ?>
    </div>
    
    <!--  Section 4 -->
    <div class="max-w-7xl mx-auto flex flex-col justify-center items-center py-16 w-full px-4">
        <div class="flex flex-col text-center mb-16">
            <h1 class="text-center mb-8"> <?php echo $section4['heading']; ?> </h1>
            <p class="text-xl"><?php echo $section4['paragraph']; ?></p>
        </div>
        <div class="flex flex-col justify-center items-center text-center">
            <div class="about-image-wrapper mb-16">
                <img class="object-cover w-full h-full" src="<?php echo esc_url($section4['image']['url']); ?>" alt="<?php echo esc_attr($section4['image']['alt']) ?>">
            </div>
            <div>
                 <p class="text-xl"><?php echo $section4['text_under_image']; ?></p>
            </div>
        </div>
    </div>


</div>

<?php get_footer(); ?>