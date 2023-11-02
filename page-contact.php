<?php
/**
 * The template for displaying the custom contact page.
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tindillelectric
 */
?>

<?php get_header(); ?>

<main id="primary" class="site-main contact">
    
    <!-- Banner -->
    <section class="banner banner-title banner-title--contact text-center">
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

    <!-- Intro -->
    <section class="intro">
        <div class="container">
            <h2 class="heading-secondary">Tell Us About Your Project</h2>
=======
    <!-- Intro -->
    <section class="intro">
        <div class="container">
            <h3 class="heading-secondary">Tell Us About Your Project</h3>
>>>>>>> 7964c2e0a374ff090c4dfed5505285fa09b1e8dd
            <p>
                With almost 15 years of experience, Tindill Electric will meet your electrical needs and make your unique projects come to life.
            </p>
            <p>
                We are delighted to assist you; let us talk about your project.
            </p>

            <?php the_content() ?>
        </div>
    </section>
    <!-- End of Intro -->

<<<<<<< HEAD
=======
    
>>>>>>> 7964c2e0a374ff090c4dfed5505285fa09b1e8dd
</main>

<?php get_footer(); ?>