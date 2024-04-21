<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php get_header(); ?>

<main>
    <?php get_content_blocks(); ?>
</main>

<?php get_footer(); ?>
</body>
</html>
