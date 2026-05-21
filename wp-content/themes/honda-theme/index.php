<?php get_header(); ?>

<main id="primary" class="site-main">
    <?php echo do_shortcode('[ivory-search id="25" title="Custom Search Form"]') ?>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php esc_html_e('投稿がありません。', 'breeze_ec'); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
