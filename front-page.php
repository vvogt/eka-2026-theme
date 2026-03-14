<?php

get_header();

$front_page_title = get_field('top_section_title');
$front_page_intro = get_field('top_section_intro');

?>

<main>

    <section class="top-section content-container">

        <div class="top-section__content">
            
            <div class="top-section__text-content">

                <h1><?php echo esc_html($front_page_title); ?></h1>

                <div class="text-content">
                    <?php echo wp_kses_post($front_page_intro); ?>
                </div>

                <img class="top-section__image-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/creatures.png" alt="">

                <div class="buttons-container">
                    <a href="" class="btn btn-primary">
                        Osta raamat
                    </a>
    
                    <a href="" class="btn btn-secondary">
                        Loe rohkem
                    </a>
                </div>


            </div>

            <img class="top-section__image" src="<?php echo get_template_directory_uri(); ?>/assets/creatures.png" alt="">

        </div>

    </section>

    <section class="content-container top-section-alt">
    
        <div class="top-section-alt__text-content">
            <h2>Meditsiiniabi ja hoolitsus Sinu koduses rahus</h2>
            
            <p class="text-body-lg">Medendi pakub professionaalset koduõendusteenust ja jalaravi Tallinnas, Viimsis ning Harjumaal. Oleme Tervisekassa ametlik lepingupartner.</p>
            
            <a href="" class="btn btn-primary">
                Loe lähemalt
            </a>
        </div>

        <div class="top-section-alt__image-container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/chris-charles-XMXor5Bvj6U-unsplash.jpg" alt="">
        </div>

    </section>

    <section>
        
        <?php 
        $services = get_terms([
            'taxonomy'   => 'teenus',
            'hide_empty' => false, // set true if you only want terms with posts assigned
        ]);

        if ( ! empty( $services ) && ! is_wp_error( $services ) ) : ?>
            <div class="services-list">

                <?php foreach ( $services as $service ) : 
                    $term_id     = $service->term_id;
                    // ACF fields - pass 'term_ID' as the second argument
                    $icon               = get_field( 'icon', 'term_' . $term_id );
                    $intro_text         = get_field( 'intro_text', 'term_' . $term_id );
                    $features_list      = get_field( 'features_list', 'term_' . $term_id );
                    $service_image      = get_field( 'service_image', 'term_' . $term_id );
                ?>

                    <a href="<?php echo esc_url(get_term_link($service)); ?>" class="service-card">
                        <div class="service-image-container">
                            <?php echo wp_get_attachment_image($service_image, 'medium'); ?>
                        </div>
                        <div class="service-intro">
                            <?php echo esc_html($intro_text); ?>
                        </div>
                        <div class="service-features">
                            <?php wp_kses_post($features_list); ?>
                        </div>
                    </a>

                <?php endforeach; ?>

            </div>
        <?php endif; ?>

    </section>

</main>

<?php get_footer(); ?>