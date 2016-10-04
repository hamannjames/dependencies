<article id = "post-<?php the_ID(); ?>" title = "<?php the_title(); ?>" <?php post_class(); ?>>
    <header class = "post-header">
        <h2><a href = "<?php the_permalink(); ?>" title = "Go to post"><?php the_title(); ?></a></h2>
    </header>

    <section class = "post-content">
        <?php
        if (has_post_thumbnail()) :
            $id = get_post_thumbnail_id();
            $url = wp_get_attachment_image_src($id,'full', true);
            $alt = get_post_meta( $id, '_wp_attachment_image_alt', true );
        ?>

        <figure class = "post-thumbnail">
            <a href = "<?php the_permalink(); ?>">
                <img src = "<?php echo $url[0]; ?>" alt = "<?php echo $alt; ?>">
            </a>
        </figure>

        <?php
        endif;
        ?>

        <p class = "post-text">
            <?php the_excerpt(); ?>
        </p>

        <a class = "post-button" title = "Go to post" role = "button" href = "<?php the_permalink(); ?>">
            Read More
        </a>
    </section>
</article>
