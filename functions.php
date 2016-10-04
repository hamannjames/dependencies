<?php

// Theme Support
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

// Meta tags not included in yoast
function ravenna_add_meta_tags() {
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset = "<?php bloginfo( 'charset' ); ?>">
    <?php

    if (is_single()){
        global $post;
        $author = get_the_author_meta('user_nicename', $post->post_author);
        echo '<meta name="author" content="' . $author . '">';
    }
    else {
    ?>
    <meta name = "author" content = "Ravenna Interactive">
    <?php
    }
}

add_action('wp_head', 'ravenna_add_meta_tags', 1);

// Widget areas
function ravenna_widgets_init() {
	register_sidebar(array(
		'name'          => 'Blog Sidebar',
		'id'            => 'blog-sidebar',
		'description'   => 'Widget area for blogs.',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	register_sidebar(array(
		'name'          => 'Page Sidebar',
		'id'            => 'page-sidebar',
		'description'   => 'Widget area for pages',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}

add_action( 'widgets_init', 'ravenna_widgets_init' );

/* Uncomment this to add the options page in ACF
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme General Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}
