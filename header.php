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
    
    <div class="content-container top-bar-container">

        <div class="top-bar">

            <a href="<?php echo get_home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/medendi_logo.svg">
            </a>

            <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container'      => 'nav',
                    'container_class'=> 'main-nav',
                ]);
            ?>

            <a href="#" class="btn">
                Võta ühendust
            </a>

        </div>

    </div>

    <div class="compact-menu-container">
        <a class="compact-menu-logo" href="<?php echo get_home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/medendi_logo.svg">
        </a>
        <button class="menu-toggle">
            Menüü
        </button>

        <div class="compact-menu-content">
            <ul>
                <li>
                    <a href="<?php echo get_home_url(); ?>">
                        Avaleht
                    </a>
                </li>
                <li>
                    <a href="<?php echo get_home_url(); ?>">
                        blablabla
                    </a>
                </li>
                <li>
                    <a href="<?php echo get_home_url(); ?>">
                        klajsdlkjasdlj
                    </a>
                </li>
                <li>
                    <a href="<?php echo get_home_url(); ?>">
                        Avaleht
                    </a>
                </li>
            </ul>
        </div>
    </div>

</header>