<div id="footer-sidebar" class="widget-area clear container" role="complementary">
    <?php do_action( 'before_sidebar' ); ?>
    <?php
    if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
        <div class="footer-column col-lg-3 col-md-3 col-sm-12 col-xs-12"> <?php
            dynamic_sidebar( 'sidebar-2');
            ?> </div> <?php
    }

    if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
        <div class="footer-columncol-lg-3 col-md-3 col-sm-12 col-xs-12"> <?php
            dynamic_sidebar( 'sidebar-3');
            ?> </div> <?php
    }

    if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
        <div class="footer-columncol-lg-3 col-md-3 col-sm-12 col-xs-12"> <?php
            dynamic_sidebar( 'sidebar-4');
            ?> </div> <?php
    }

    if ( is_active_sidebar( 'sidebar-5' ) ) { ?>
        <div class="footer-columncol-lg-3 col-md-3 col-sm-12 col-xs-12"> <?php
            dynamic_sidebar( 'sidebar-5');
            ?> </div> <?php
    }
    ?>
</div>

<?php if ( is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') ) : ?>
    <div id="footer-sidebar" class="widget-area">
        <div class="container">
            <?php
            if ( is_active_sidebar( 'footer-1' ) ) : ?>
                <div class="footer-column col-md-3 col-sm-6">
                    <?php dynamic_sidebar( 'footer-1'); ?>
                </div>
            <?php endif;

            if ( is_active_sidebar( 'footer-2' ) ) : ?>
                <div class="footer-column col-md-3 col-sm-6">
                    <?php dynamic_sidebar( 'footer-2'); ?>
                </div>
            <?php endif;

            if ( is_active_sidebar( 'footer-3' ) ) : ?>
                <div class="footer-column col-md-3 col-sm-6"> <?php
                    dynamic_sidebar( 'footer-3'); ?>
                </div>
            <?php endif;

            if ( is_active_sidebar( 'footer-4' ) ) : ?>
                <div class="footer-column col-md-3 col-sm-6"> <?php
                    dynamic_sidebar( 'footer-3'); ?>
                </div>
            <?php endif;

            ?>

        </div>
    </div>	<!--#footer-sidebar-->
<?php endif; ?>