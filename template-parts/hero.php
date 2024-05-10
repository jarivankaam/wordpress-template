<?php
$row_index = get_row_index();
$section_id = 'section-' . $row_index;
$section_selector = '#' . $section_id;

$title = get_sub_field('hero_title');


$subtext = get_sub_field('hero_content');


$buttons = get_sub_field('buttons');
$hero_image = get_sub_field('image');
if(!empty($buttons)) {
    $buttonCount = count($buttons);
};

?>

<section id="<?= $section_id; ?>" class="section-hero">
    <div class="image-wrapper">
        <img src="<?= $hero_image ?>" alt="hero image">
    </div>
    <div class="container">
        <div class="row">
            <?php if($title) : ?>
                <div class="col-12 <?php if($hero_image): ?>col-sm-12 col-md-12 col-lg-6 <?php endif ?>">
                    <div class="content-wrapper maxtext">
                        <h1><?= $title ?></h1>
                        <div class="subtext">
                            <p><?= $subtext ?></p>
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
                </div>
            <?php endif ?>
         </div>
    </div>
</section>