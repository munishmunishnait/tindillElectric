<?php
/**
 * The template for displaying the custom projects page.
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tindillelectric
 */
?>

<?php get_header(); ?>

<main id="primary" class="site-main projects">
    
    <!-- Banner -->
    <section class="banner banner-title banner-title--projects text-center">
        <?php while ( have_posts() ) : the_post(); ?>
<<<<<<< HEAD
            <h2 class="heading-primary heading-primary--main"><?php the_title(); ?></h2>
=======
            <h3 class="heading-primary heading-primary--main"><?php the_title(); ?></h3>
>>>>>>> 7964c2e0a374ff090c4dfed5505285fa09b1e8dd
        <?php endwhile; ?>
    </section>
    <!-- End of Banner -->

<<<<<<< HEAD

    <!-- Gallery -->
    <section class="projects-gallery">
        <div class="container">
            <h2 class="sr-only">Project Gallery</h2>
=======
    <!-- Gallery -->
    <section class="projects-gallery">
        <div class="container">
>>>>>>> 7964c2e0a374ff090c4dfed5505285fa09b1e8dd
            <?php the_content() ?>
        </div>
    </section>
    <!-- End of Gallery -->

</main>

<aside>
    <?php get_template_part( 'template-parts/content', 'contact-cta' ); ?>
</aside>

<?php get_footer(); ?>