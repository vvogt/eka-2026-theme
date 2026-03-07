<?php
/**
 * The template for displaying image and numbered list
 *
 * @package sei-leadit
 */

$text_above_title        = $args['text_above_title'] ?? false;
$section_title           = $args['section_title'] ?? false;
$numbered_list_items     = $args['numbered_list_items'] ?? false;
$link                    = $args['link'] ?? false;
$image                   = $args['image'] ?? false;
$image_placement         = $args['image_placement'] ?? 'left';

?>

<section class="module_image-and-numbered-list py-16 md:py-25">
    <div class="content-container-md">
        <div class="flex flex-col <?= $image_placement === 'right' ? 'md:flex-row-reverse' : 'md:flex-row md:min-h-175'; ?>">

            <div class="flex-3 min-h-100 md:h-auto md:min-h-0 relative overflow-hidden md:overflow-visible js-reveal">
                <div class="w-full relative min-h-100 md:h-full <?= $image_placement === 'right' ? 'md:-mr-13.5' : 'md:-ml-13.5'; ?> md:w-[calc(100%+54px)]">
                    <?= wp_get_attachment_image($image, 'full', false, array('class' => 'w-full min-h-100 md:h-full absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 object-cover object-center')); ?>
                    <?= get_image_caption_overlay($image); ?>
                </div>
            </div>

            <div class="flex-5 md:px-10 flex flex-col justify-center <?= $image_placement === 'right' ? 'xl:pr-25 xl:pl-11.5' : 'xl:pl-25 xl:pr-11.5'; ?> pt-12 md:py-16">
                <?php if ($text_above_title) : ?>
                    <h2 class="text-xs leading-[1] uppercase tracking-[2px] mb-6 js-reveal">
                        <span class="bg-green-400 rounded-full w-1.5 h-1.5 inline-block mr-2.5 ml-0.5 -translate-y-0.25"></span>
                        <?= $text_above_title; ?>
                    </h2>
                <?php endif; ?>

                <?php if ($section_title) : ?>
                    <h2 class="text-3xl md:text-6xl leading-[1.25] font-serif text-blue-500 js-reveal">
                        <?= $section_title; ?>
                    </h2>
                <?php endif; ?>
                
                <?php if ($numbered_list_items) : ?>
                    <ol class="mt-5 md:mt-6 numbered-list">
                        <?php foreach ($numbered_list_items as $index => $item) : ?>
                            <li class="numbered-list-item py-8 relative group pl-15 js-reveal">
                                <div class="absolute group-first:hidden top-0 left-0 w-full h-0.25 bg-gradient-to-r from-green-400 to-green-500"></div>
                                <div class="flex items-start">
                                    <div class="flex-1">
                                        <?php if ($item['item_title']) : ?>
                                            <h3 class="text-xl mb-3 text-green-500 font-serif">
                                                <?= $item['item_title']; ?>
                                            </h3>
                                        <?php endif; ?>
                                        <?php if ($item['item_text']) : ?>
                                            <p class="text-gray-700 leading-relaxed">
                                                <?= $item['item_text']; ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ol>
                <?php endif; ?>

                <?php if ($link && $link['url']) : ?>
                    <div class="mt-6 md:mt-10 js-reveal">
                        <?= get_template_part('template-parts/button-gradient', '', array(
                            'text' => $link['title'] ?: 'Learn more', 
                            'dark_theme' => true, 
                            'link' => $link['url'], 
                            'classes' => 'inline-block'
                        )); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>