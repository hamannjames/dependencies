<?php get_header(); $title = single_cat_title(); $widget = is_active_sidebar('blog-sidebar'); ?>
<section class = "post-container">

    <header class = "page-header">
        <h1><?php

        if ($title) {
            echo $title;
        }
        else {
            echo ('Blog');
        }

        ?></h1>
    </header>

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();

            get_template_part('template-parts/post-excerpt');

        endwhile;
    else :
    ?>

    <section class = "no-posts">
        <h2>Sorry, there were no posts found.</h2>
    </section>

    <?php
    endif;
    ?>

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
