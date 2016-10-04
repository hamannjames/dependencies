<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<head>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >
    <div id = "site-wrapper">
        <div id = "site-container">

            <header id = "site-header" title = "Site Header">
                <div id = "site-header-container">
                    <figure id = "logo-container">
                    </figure>

                    <nav id = "site-nav" title = "Main Navigation">
                        <div id = "nav-container">
                        </div>
                    </nav>
                </div>
            </header>

            <main id = "site-content"  role = "main" class = "<?php

            if (is_page()) {
                echo 'page-wrapper';
            }
            elseif (is_single()) {
                echo 'post-wrapper';
            }
            elseif (is_archive() || (is_front_page() && is_home())) {
                echo 'post-excerpts-wrapper';
            }
            else {
                echo 'content-wrapper';
            }
            ?>">
