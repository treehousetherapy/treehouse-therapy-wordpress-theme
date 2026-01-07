<?php
/**
 * The template for displaying all pages
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php while (have_posts()) : the_post(); ?>
        
        <!-- Page Header -->
        <section class="page-header bg-gradient-to-br from-primary-navy to-deep-teal text-white py-20 px-4">
            <div class="container-custom text-center">
                <h1 class="text-5xl md:text-6xl font-nunito font-bold mb-4">
                    <?php the_title(); ?>
                </h1>
            </div>
        </section>

        <!-- Page Content -->
        <section class="page-content section bg-white">
            <div class="container-custom max-w-4xl">
                <div class="prose prose-lg max-w-none">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>

    <?php endwhile; ?>
</main>

<?php
get_footer();
