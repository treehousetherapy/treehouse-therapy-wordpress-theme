<?php
/**
 * The main template file
 */

get_header();
?>

<main id="primary" class="site-main py-20 px-4">
    <div class="container-custom">
        <?php if (have_posts()) : ?>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('card p-6'); ?>>
                        <header class="entry-header mb-4">
                            <?php the_title('<h2 class="entry-title text-2xl font-nunito font-bold mb-2"><a href="' . esc_url(get_permalink()) . '" class="text-primary-navy hover:text-primary-orange">', '</a></h2>'); ?>
                        </header>

                        <div class="entry-content text-text-medium">
                            <?php the_excerpt(); ?>
                        </div>

                        <footer class="entry-footer mt-4">
                            <a href="<?php the_permalink(); ?>" class="text-primary-orange font-semibold hover:underline">
                                Read more →
                            </a>
                        </footer>
                    </article>
                <?php endwhile; ?>
            </div>

            <?php the_posts_navigation(); ?>

        <?php else : ?>
            <p class="text-center text-xl text-text-medium">No content found.</p>
        <?php endif; ?>
    </div>
</main>

<?php
get_footer();
