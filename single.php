<?php get_header(); $widget = is_active_sidebar('blog-sidebar'); ?>
<?php the_author(get_the_ID()); ?>
<?php the_post(); ?>

<section class = "post-container">

    <article id = "post-<?php the_ID(); ?>" title = "<?php the_title(); ?>" <?php post_class(); ?>>
        <header class = "post-header">
            <h1><?php the_title(); ?></h1>
        </header>

        <section class = "post-content">
            <?php
            if (has_post_thumbnail()) :
                $id = get_post_thumbnail_id();
                $url = wp_get_attachment_image_src($id,'full', true);
                $alt = get_post_meta( $id, '_wp_attachment_image_alt', true );
                ?>

                <figure class = "post-thumbnail">
                    <img src = "<?php echo $url[0]; ?>" alt = "<?php echo $alt; ?>">
                </figure>

                <?php
            endif;
            ?>

            <p class = "post-text">
                <?php the_content(); ?>
            </p>
        </section>

        <section class = "post-pagination">
            <?php

            $args = array(
                'link_before' => '<span class = "pagination-link" title = "Go to post">',
                'link_after' => '</span>',
                'nextpagelink' => 'Next Post',
                'previouspagelik' => 'Previous Post'
            );

            wp_link_pages($args);

            ?>

        </section>
    </article>

</section>

<?php
if ($widget) :
?>

<aside class = "sidebar" role="complementary">
    <?php dynamic_sidebar('blog-sidebar'); ?>
</aside>

<?php
endif;
?>

<?php get_footer(); ?>
