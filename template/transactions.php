<?php
/**
 * Template Name: Transactions Page
 * Template Post Type: page
 *
 */
get_header();
?>
<?php 
    $hero = get_field('hero_section');
    $sections = get_field('transactions_box_repeaters');
?>
<div class="max-w-screen-2xl mx-auto">
    <!--  Hero Section -->
    <div class="flex flex-col gap-8 justify-center items-center py-16 xl:py-28 w-full ">
        <div class="flex flex-col justify-items-center items-center justify-center">
            <h1 class="mb-8 text-center"> <?php echo $hero['heading']; ?> </h1>
            <p class="text-center text-xl"><?php echo $hero['paragraph']; ?></p>
        </div>
    </div>
    <!-- Repeaters -->
    <div class="flex flex-col justify-center items-center w-full gap-14 text-center px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 justify-between gap-5">
                <?php foreach( $sections as $section): ?>
                    <div class="p-6 border border-black rounded-xl w-full h-full">
                        <img class="w-full h-80 mb-10" src="<?php echo esc_url($section['image']['url']); ?>" alt="<?php echo esc_attr($section['image']['alt']); ?>" />
                        <h3 class="mb-6"><?php echo $section['heading'] ?></h3>
                        <p><?php echo $section['paragraph'] ?></p>
                    </div>
                    
                <?php endforeach; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>