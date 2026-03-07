<?php

/**
 * Partial: Modules
 *
 * @package visitlv
 */

// Check value exists.

if (have_rows('modular_content')) :

    while (have_rows('modular_content')) :
        the_row();

        if (get_row_layout() == 'members_map') :
            $tagline                = get_sub_field('tagline');
            $text                   = get_sub_field('text');
            $link                   = get_sub_field('link');
            $logo_carousel_title    = get_sub_field('logo_carousel_title');

            get_template_part(
                'template-parts/module_members-map', null, array(
                    'tagline'                => $tagline,
                    'text'                   => $text,
                    'link'                   => $link,
                    'logo_carousel_title'    => $logo_carousel_title,
                )
            );
        
        elseif (get_row_layout() == 'latest_posts') :
            $post_type      = get_sub_field('post_type');
            $section_title  = get_sub_field('section_title');
            $section_image  = get_sub_field('section_image');

            get_template_part(
                'template-parts/module_latest-posts', null, array(
                    'post_type'      => $post_type,
                    'section_title'  => $section_title,
                    'section_image'  => $section_image,
                )
            );

        elseif (get_row_layout() == 'image_and_text_content') :
            $text_above_content = get_sub_field('text_above_content');
            $content            = get_sub_field('content');
            $link               = get_sub_field('link');
            $image              = get_sub_field('image');
            $image_placement    = get_sub_field('image_placement');

            get_template_part(
                'template-parts/module_image-and-text-content', null, array(
                    'text_above_content' => $text_above_content,
                    'content'            => $content,
                    'link'               => $link,
                    'image'              => $image,
                    'image_placement'    => $image_placement,
                )
            );

        elseif (get_row_layout() == 'full_screen_image_with_text') :
            $image = get_sub_field('image');
            $text = get_sub_field('text');
            $link = get_sub_field('link');

            get_template_part(
                'template-parts/module_full-screen-image-with-text', null, array(
                    'image' => $image,
                    'text' => $text,
                    'link' => $link,
                )
            );
        
        elseif (get_row_layout() == 'accordion') :
            $text_above_title   = get_sub_field('text_above_title');
            $title              = get_sub_field('title');
            $link               = get_sub_field('link');
            $accordion          = get_sub_field('accordion');

            get_template_part(
                'template-parts/module_accordion', null, array(
                    'text_above_title'  => $text_above_title,
                    'title'             => $title,
                    'link'              => $link,
                    'accordion'         => $accordion,
                )
            );

        elseif (get_row_layout() == 'title_and_content_-_5050') :
            $text_above_title   = get_sub_field('text_above_title');
            $title              = get_sub_field('title');
            $link_below_title   = get_sub_field('link_below_title');
            $content            = get_sub_field('content');

            get_template_part(
                'template-parts/module_title-and-content-5050', null, array(
                    'text_above_title'  => $text_above_title,
                    'title'             => $title,
                    'link_below_title'  => $link_below_title,
                    'content'           => $content,
                )
            );

        elseif (get_row_layout() == 'image_and_numbered_list') :
            $section_title           = get_sub_field('section_title');
            $numbered_list_items     = get_sub_field('numbered_list_items');
            $link                    = get_sub_field('link');
            $image                   = get_sub_field('image');
            $image_placement         = get_sub_field('image_placement');

            get_template_part(
                'template-parts/module_image-and-numbered-list', null, array(
                    'section_title'          => $section_title,
                    'numbered_list_items'    => $numbered_list_items,
                    'link'                   => $link,
                    'image'                  => $image,
                    'image_placement'        => $image_placement,
                )
            );

        elseif (get_row_layout() == 'link_cards') :

            $text_above_title   = get_sub_field('text_above_title');
            $title              = get_sub_field('title');
            $images_on_cards    = get_sub_field('images_on_cards');
            $link_cards         = get_sub_field('link_cards');
            $bottom_content_title = get_sub_field('bottom_content_title');
            $bottom_content_text  = get_sub_field('bottom_content_text');
            $bottom_content_link  = get_sub_field('bottom_content_link');

            get_template_part(
                'template-parts/module_link-cards', null, array(
                    'text_above_title'  => $text_above_title,
                    'title'             => $title,
                    'images_on_cards'   => $images_on_cards,
                    'link_cards'        => $link_cards,
                    'bottom_content_title' => $bottom_content_title,
                    'bottom_content_text'  => $bottom_content_text,
                    'bottom_content_link'  => $bottom_content_link,
                )
            );

        elseif (get_row_layout() == 'related_news') :
            $text_above_title = get_sub_field('text_above_title');
            $section_title = get_sub_field('section_title');
            $articles = get_sub_field('articles');

            get_template_part(
                'template-parts/module_related-news', null, array(
                    'text_above_title' => $text_above_title,
                    'section_title' => $section_title,
                    'post_list' => $articles,
                )
            );

        elseif (get_row_layout() == 'upcoming_events') :
            $title = get_sub_field('title');
            $text_above_title = get_sub_field('text_above_title');

            get_template_part(
                'template-parts/module_upcoming-events', null, array(
                    'title' => $title,
                    'text_above_title' => $text_above_title,
                )
            );

        elseif (get_row_layout() == 'member_testimonials') :
            $section_title = get_sub_field('section_title');
            $selected_testimonials = get_sub_field('selected_testimonials');

            get_template_part(
                'template-parts/module_member-testimonials', null, array(
                    'section_title' => $section_title,
                    'selected_testimonials' => $selected_testimonials,
                )
            );

        elseif (get_row_layout() == 'three_column_text_content') :
            $columns = get_sub_field('columns');

            get_template_part(
                'template-parts/module_three-column-text-content', null, array(
                    'columns' => $columns,
                )
            );

        elseif (get_row_layout() == 'timeline') :
            $text_above_title = get_sub_field('text_above_title');
            $section_title = get_sub_field('section_title');
            $section_intro_text = get_sub_field('section_intro_text');
            $timeline_title = get_sub_field('timeline_title');
            $timeline_items = get_sub_field('timeline_items');
            $downloads_title = get_sub_field('downloads_title');
            $downloads_description = get_sub_field('downloads_description');
            $downloads = get_sub_field('downloads');

            get_template_part(
                'template-parts/module_timeline', null, array(
                    'text_above_title' => $text_above_title,
                    'section_title' => $section_title,
                    'section_intro_text' => $section_intro_text,
                    'timeline_title' => $timeline_title,
                    'timeline_items' => $timeline_items,
                    'downloads_title' => $downloads_title,
                    'downloads_description' => $downloads_description,
                    'downloads' => $downloads,
                )
            );

        elseif (get_row_layout() == 'people') :
            $section_title = get_sub_field('section_title');
            $section_intro = get_sub_field('section_intro');
            $logo = get_sub_field('logo');
            $people = get_sub_field('people');
            $section_bottom_title = get_sub_field('section_bottom_title');
            $section_bottom_text = get_sub_field('section_bottom_text');

            get_template_part(
                'template-parts/module_people', null, array(
                    'section_title' => $section_title,
                    'section_intro' => $section_intro,
                    'logo' => $logo,
                    'people' => $people,
                    'section_bottom_title' => $section_bottom_title,
                    'section_bottom_text' => $section_bottom_text,
                )
            );

        elseif (get_row_layout() == 'link_block') :
            $text_above_title = get_sub_field('text_above_title');
            $title = get_sub_field('title');
            $link = get_sub_field('link');

            get_template_part(
                'template-parts/module_link-block', null, array(
                    'text_above_title' => $text_above_title,
                    'title' => $title,
                    'link' => $link,
                )
            );

        elseif (get_row_layout() == 'centered_logos') :
            $section_title = get_sub_field('section_title');
            $section_text = get_sub_field('section_text');
            $logos = get_sub_field('logos');

            get_template_part(
                'template-parts/module_centered-logos', null, array(
                    'section_title' => $section_title,
                    'section_text' => $section_text,
                    'logos' => $logos,
                )
            );

        elseif (get_row_layout() == 'form') :
            $form_id = get_sub_field('form');

            get_template_part(
                'template-parts/module_form', null, array(
                    'form' => $form_id,
                )
            );

        elseif (get_row_layout() == 'text_content_-_centered') :
            $text_content = get_sub_field('text_content');

            get_template_part(
                'template-parts/module_text-content-centered', null, array(
                    'text_content' => $text_content,
                )
            );

        endif;

        // End loop.
    endwhile;

    // No value.
else :
    // Do something...
endif;

?>