<?php
$row_index = get_row_index();
$section_id = 'section-' . $row_index;
$section_selector = '#' . $section_id;

$image = get_sub_field('image');
$content = get_sub_field('content');
$buttons = get_sub_field('buttons');
$reverse_layout = get_sub_field('layout');
$centered = get_sub_field('centered');
if(!empty($buttons)) {
    $buttonCount = count($buttons);
};

$use_image = get_sub_field('use_image');
$background = get_sub_field('background-color');
$color = get_sub_field('color');


?>
<?php if($background && $color): ?>
    <style>
        .section-text {
            background: <?= $color ?>;
            padding-top: 100px;
            padding-bottom: 100px;
        }
    </style>
<?php endif ?>

<section id="<?= $section_id ?>" class="section-text">
    <div class="container">
        <div class="row <?php if($reverse_layout) : ?>  flex-row-reverse <?php if(wp_is_mobile()) : ?>flex-column-reverse <?php endif ?> <?php endif ?>">
            <?php if($use_image && $image) : ?>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="image-wrapper">
                        <img src="<?= $image ?>" alt="image">
                    </div>
                </div>
            <?php endif ?>
            <?php if($content): ?>
                <div class="col-12 <?php if(!$centered) : ?>col-sm-12 col-md-12 col-lg-6<?php endif ?>">
                    <div class="content-wrapper maxtext">
                        <?= $content ?>
                    </div>
                    <?php if (have_rows('buttons')) : ?>
                        <div class="cta-wrapper flex <?php if ($buttonCount > 1) : ?> full-width-buttons <?php endif ?>">
                            <?php while (have_rows('buttons')) : the_row(); ?>
                                <?php $button = get_sub_field('button');
                                $button_type = get_sub_field('button_type'); ?>
                                <?= getButton($button, '', $button_type); ?>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
