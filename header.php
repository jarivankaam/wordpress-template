
    <header  class="site-header">
        <div class="relative">
            <div class="container">
                <div class="header-wrapper flex align-center justify-space-between">
                    <div class=" <?php if (wp_is_mobile()) : ?>col-middle <?php else : ?>col-left<?php endif; ?> flex align-center">
                        <div class="col-logo">
                            <a href="<?php echo get_bloginfo('url'); ?>" rel="home">
                                <?php echo get_bloginfo('name'); ?>
                            </a>
                        </div>

                        <div class="main-menu col-menu">
                            <div class="mobile-menu-back desktop-hide">
                                <a href="javascript:void(0);" class="cta icon icon-before icon-left back-btn">Terug</a>
                            </div>

                            <div class="desktop-hide">

                            </div>
                        </div>
                    </div>

                    <div class="col-right flex align-center">

                        <ul class="right-menu flex align-center desktop-hide">
                            <li>
                                <a class="menu-toggle" href="javascript:void(0);">
                                    <span class="menu-toggle-button icon icon-before icon-menu noma"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
