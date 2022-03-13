<?php
/**
 * Template Name: Generic Page
 * Template Post Type: page
 *
 */
get_header();
?>
<!-- Hero Section -->
<div class="w-full md:max-w-3xl xl:max-w-6xl 2xl:max-w-screen-2xl mx-auto">
    <!--  Generic Heading -->
    <div class="flex flex-col justify-center py-16 px-4">
        <h1 class="mb-8 text-center"> <?php echo the_title(); ?> </h1>
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>