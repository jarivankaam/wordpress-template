<?php
$logo = get_field('header_logo', 'options');
$buttons = get_field("buttons", "options");
?>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header  class="site-header">
        <div class="relative">
            <div class="container">
                <div class="header-wrapper flex align-center justify-space-between">
                    <div class=" <?php if (wp_is_mobile()) : ?>col-middle <?php else : ?>col-left<?php endif; ?> flex align-center">
                        <div class="col-logo">
                            <a href="<?php echo get_bloginfo('url'); ?>" rel="home">
                                <?php if($logo) : ?>
                                    <img src="<?= $logo ?>" alt="<?= get_bloginfo('name'); ?> - Logo">
                                <?php else : ?>
                                    <?php echo get_bloginfo('name'); ?>
                                <?php endif ?>
                            </a>
                        </div>

                        <div class="main-menu col-menu flex align-items-center mobile-hide">
                            <?php
                                wp_nav_menu( array(
                                'theme_location'  => 'primary', // Make sure 'primary' matches the identifier used in register_nav_menus
                                'container'       => 'nav',     // Wraps the menu in <nav> tags
                                'container_class' => 'primary-menu', // Class for the container
                                'menu_class'      => 'nav-items',     // Class for the <ul> element
                                'fallback_cb'     => false            // Do not fall back to wp_page_menu()
                                ) );
                                ?>
                                <ul>
                                    <?php if($buttons) : ?>
                                        <li class="cta-wrapper">
                                            <?php foreach($buttons as $button) : ?>
                                                <a href="<?= $button['url']['url'] ?>"><?= $button['url']['title'] ?></a>
                                            <?php endforeach ?>
                                        </li>
                                    <?php endif ?>
                                </ul>

                            <div class="desktop-hide">

                            </div>
                        </div>
                    </div>

<!--                    <div class="col-right flex align-center">-->
<!---->
<!--                        <ul class="right-menu flex align-center desktop-hide">-->
<!--                            <li>-->
<!--                                <a class="menu-toggle" href="javascript:void(0);">-->
<!--                                    <span class="menu-toggle-button icon icon-before icon-menu noma"></span>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            --><?php
//                            wp_nav_menu( array(
//                                'theme_location' => 'primary', // Specify the menu location identifier, change this to your actual theme location
//                                'container'      => 'nav',      // Wraps the menu in <nav> tags
//                                'container_class'=> 'primary-menu', // Class for the container
//                                'menu_class'     => 'nav-items',     // Class for the <ul> element
//                                'fallback_cb'    => false            // Do not fall back to wp_page_menu()
//                            ) );
//                            ?>
<!--                            <li>-->
<!--                                <a class="menu-toggle" href="javascript:void(0);">-->
<!--                                    <span class="menu-toggle-button icon icon-before icon-menu noma"></span>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </header>
    <div id="post-<?php the_ID(); ?>" <?php post_class('wrapper'); ?>>
        <?php if (!is_front_page()) : ?>
            <section id="breadcrumbs"
                     class="section-breadcrumbs p-top-30 m-bot-30 pb-0 header-crumbs <?php if (is_single()) : ?>absolute top<?php endif; ?>">
                <div class="container">
                    <?php yoast_breadcrumb('<div class="breadcrumbs">', '</div>'); ?>
                </div>
            </section>
        <?php endif; ?>
