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
            // The Query.
            $the_query = new WP_Query(array('post_type' => 'service'));

            // The Loop.
            if ( $the_query->have_posts() ) :
        ?>
            <div class="service-cards-container">

                <?php
                while ($the_query->have_posts()) :
                    $the_query->the_post();

                    $intro_text = get_field('intro_text');
                    $features_list = get_field('features_list');
                    $image = get_field('service_image');
                    $icon = get_field('icon');
                ?>
                    <div class="service-card">

                        <div class="service-image">
                            <?php echo wp_get_attachment_image($image, 'medium'); ?>
                        </div>
                    
                        <h3><?php the_title(); ?></h3>
                        <div class="service-description">
                            <?php echo esc_html($intro_text); ?>
                        </div>
                        <div class="features-list">
                            <?php echo wp_kses_post($features_list); ?>
                        </div>

                    </div>
                <?php endwhile; ?>
            </div>

            <?php else : ?>
                <?php echo esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
            <?php endif; ?>
            
        <?php wp_reset_postdata(); ?>

    </section>

</main>

<?php get_footer(); ?>