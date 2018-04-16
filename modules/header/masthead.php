<header id="masthead" class="site-header" role="banner">
    <div class="header-image">


        <div class="site-branding container">
            <?php if (get_theme_mod("logo")) { ?>
                <div id = "logo" class = "col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <a href="<?php echo esc_url(home_url('/')); ?>"><img src ="<?php echo esc_url(get_theme_mod('logo')); ?>">
                </div>
            <?php }
            else {
                ?>
<!--                <div id="text-title-desc">-->
<!--                    <h1 class="site-title title-font"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></h1>-->
<!--                    <h2 class="site-description">--><?php //bloginfo( 'description' ); ?><!--</h2>-->
<!--                </div>-->
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <div id="site-description-wrapper">
                    <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                </div>
            <?php } ?>
        </div><!-- .site-branding -->


        <div class="search-wrapper">
            <div class="container">
                <?php get_template_part('modules/header/searchform'); ?>
                <?php get_template_part('modules/social/social', 'fa'); ?>
            </div>
        </div>
    </div>


</header><!-- #masthead -->