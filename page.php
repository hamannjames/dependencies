<?php get_header(); $widget = is_active_sidebar('page-sidebar'); // Uncomment this if page builder is set up. Change field name if necessary. $pageBuilder = get_field('use_page_builder'); ?>
<section class = "page-container">

    <?php
    /* Utilize the page builder here
    if ($pageBuilder) :

        page builder

    else :
    */
    if (have_posts()) : the_post();
    ?>
    <article id = "page-<?php the_ID(); ?>" title = "<?php the_title(); ?>" <?php post_class(); ?>>
        <header class = "post-header">
            <h1 class = "post-title"><?php the_title(); ?></h1>
        </header>

        <section class = "post-content">
            <p>
                <?php the_content(); ?>
            </p>
        </section>
    </article>
    <?php
    else :
    ?>

    <section class = "no-posts">
        <h2>There isn't any content...yet!</h2>
    </section>

    <?php
    endif;
    ?>

</section>

<?php
if ($widget) :
?>

<aside class = "sidebar" role="complementary">
    <?php dynamic_sidebar('page-sidebar'); ?>
</aside>

<?php
endif;
?>

<? get_footer(); ?>
