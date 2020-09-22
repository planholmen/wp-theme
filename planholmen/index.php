<?php
/**
 * Template name: Index Page
 *
 * @package PLan Holmen V2
 * @author Gustav Utke Kauman
 * @version 1.0.0
 * @since PLan Holmen V2 1.0
 */
?>

<?php echo get_header(); ?>

<div class="body flex flex-col">

    <?php get_header('content'); ?>

    <?php while ( have_posts() ) : the_post(); ?>

    <main class="main pb-12 flex-1">
        <div class="content w-11/12 md:w-10/12 mt-10 mx-auto">

            <!-- Begin Page Content -->
            <?php the_content(); ?>
            <!-- End Page Content -->

            <?php
            endwhile; //resetting the page loop
            wp_reset_query(); //resetting the page query
            ?>
        </div>
    </main>

    <?php get_footer(); ?>

    <?php wp_footer(); ?>
</div>