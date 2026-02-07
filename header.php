<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<header>
    
    <div class="top-bar content-container">

        <a href="<?php echo get_home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/medendi_logo.svg">
        </a>

        <nav class="top-bar-nav">
            <ul>
                <li><a href="#">Teenused</a></li>
                <li><a href="#">Patsiendile</a></li>
                <li><a href="#">Meist</a></li>
            </ul>
        </nav>

        <a href="#">
            Võta ühendust
        </a>

    </div>

</header>