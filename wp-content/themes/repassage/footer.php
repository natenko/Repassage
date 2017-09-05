</div><!-- .main -->
<footer id="footer">
    <div class="footer-content">
        <div class="footer-item footer-item-left">
            <span><?php bloginfo(); ?></span>
            <span class="mark">copyright © 2011-<?php echo date('Y'); ?> Repassage </span>
        </div>
        <a class="footer-logo" href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="REPASSAGE">
        </a>
        <div class="footer-item footer-item-right">
            <span><?php bloginfo(); ?></span>
            <span class="mark-mob">copyright © 2011-<?php echo date('Y'); ?> Repassage </span>
            <span class="mark">developed by blcbk</span>
        </div>
    </div>
</footer>
<div class="go-up" title="Вверх" id='ToTop'>вверх</div>
<div class="go-down" title="Вниз" id='OnBottom'>вниз</div>
<div class="popup-menu">
    <span class="title">меню</span>
    <span class="close-popup"></span>
    <nav id="site-navigation" class="container-small main-menu" role="navigation"
         aria-label="<?php esc_attr_e('Главное меню'); ?>">
       <?php
        wp_nav_menu(array(
            'theme_location' => 'primary__left',
            'menu_class' => 'primary__menu',
        ));
        ?>

         <?php
        wp_nav_menu(array(
            'theme_location' => 'primary__middle',
            'menu_class' => 'primary__menu',
        ));
        ?>
         <?php
        wp_nav_menu(array(
            'theme_location' => 'primary__right',
            'menu_class' => 'primary__menu',
        ));
        ?>

    </nav>
</div>
</div>

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri() ?>/js/js-animation.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/masked.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/slick.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery-ui-1.8.custom.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jcf.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/tabs.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jcf.scrollable.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/blog.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/clock.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/main.my.js"></script>
</body>
</html>