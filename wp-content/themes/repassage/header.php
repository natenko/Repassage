<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" rel="shortcut icon"
          type="image/x-icon"/>

    <?php wp_head(); ?>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>
</head>

<body <?php body_class(); ?>>
<script>
    $(window).load(function () {
        setTimeout(function () {
            if ($('body').hasClass("other_page")) {

                if ($(window).width() > 640) {

                    offsetElem8 = $('.other_page .contact').offset().top - 100;

                    $(".other_page .anchor-contact").click(function () {
                        $(".popup-menu").removeClass("open");
                        $("body,html").animate({"scrollTop": offsetElem8}, 1200);
                    });

                } else {
                    offsetElem8 = $('.other_page .contact').offset().top - 1;

                    $(".other_page .anchor-contact").click(function () {
                        $(".popup-menu").removeClass("open");
                        $("body,html").animate({"scrollTop": offsetElem8}, 1200);
                    });

                }
            }
            if ($('body').hasClass("other_page")) {

                if ($(window).width() > 640) {

                    mapElement2 = $('.other_page .box-map').offset().top - 100;

                    $(".other_page .btn-map").click(function () {
                        $("body,html").animate({"scrollTop": mapElement2}, 1200);
                    });

                } else {

                    mapElement2 = $('.other_page .box-map').offset().top - 150;

                    $(".other_page .btn-map").click(function () {
                        $("body,html").animate({"scrollTop": mapElement2}, 1200);
                    });

                }
            }
        }, 20);
    });
</script>
<div style="display: none;">
     <svg xmlns="http://www.w3.org/2000/svg">
        <symbol id="icon-arrow-dashed" viewBox="0 0 76 20">
        <title>noun_959577_cc</title><g fill-rule="nonzero" fill="#000"><path d="M40.1 9.2h-6c-.6 0-1 .4-1 1s.4 1 1 1h6c.6 0 1-.4 1-1s-.5-1-1-1zM29.1 9.2h-6c-.6 0-1 .4-1 1s.4 1 1 1h6c.6 0 1-.4 1-1s-.5-1-1-1zM18.1 9.2h-6c-.6 0-1 .4-1 1s.4 1 1 1h6c.6 0 1-.4 1-1s-.5-1-1-1zM7.1 9.2h-6c-.6 0-1 .4-1 1s.4 1 1 1h6c.6 0 1-.4 1-1s-.5-1-1-1zM51.1 9.2h-6c-.6 0-1 .4-1 1s.4 1 1 1h6c.6 0 1-.4 1-1s-.5-1-1-1zM62.1 9.2h-6c-.6 0-1 .4-1 1s.4 1 1 1h6c.6 0 1-.4 1-1s-.5-1-1-1zM67.1 1c-.4-.4-1-.4-1.4 0-.4.4-.4 1 0 1.4l6.8 6.8h-5.4c-.6 0-1 .4-1 1s.4 1 1 1h5.4L65.7 18c-.4.4-.4 1 0 1.4.2.2.5.3.7.3.2 0 .5-.1.7-.3l8.5-8.5c.4-.4.4-1 0-1.4L67.1 1z"/></g>
        </symbol>
     </svg>
  </div> 
<div id="page-preloader">
    <img class="preload-bg" src="<?php echo get_template_directory_uri(); ?>/images/preload-bg.png" alt="">
    <img class="preload-logo" src="<?php echo get_template_directory_uri(); ?>/images/preload-logo.png" alt="">
</div>
<div id="page" class="wrapper">

    <?php $options = get_option('theme_settings'); ?>
    <header id="header">
        <div class="header-nav header-nav-left">
            <div class="tel-box">
                <span class="nav-icon-btn tel-btn" title="Свяжитесь с нами"></span>
                <div class="popup-tel">
                    <span class="close-popup"></span>
                    <span class="title">Свяжитесь с нами</span>
                    <div class="popup-tel-info">
                        <span>Наши телефоны:</span>
                        <ul>
                            <li><a href="tel:<?php echo $options['phone-1'] ?>"><?php echo $options['phone-1'] ?></a>
                            </li>
                            <li><a href="tel:<?php echo $options['phone-2'] ?>"><?php echo $options['phone-2'] ?></a>
                            </li>
                        </ul>
                    </div>
                    <?php echo do_shortcode('[contact-form-7 id="152" title="Обратный звонок"]'); ?>
                </div>
            </div>
            <div class="download-box">
                <span class="nav-icon-btn download-btn" alt="Скачать презентацию" title="Скачать презентацию"></span>
                <div class="popup-download">
                    <span class="close-popup"></span>
                    <span class="title">Скачать презентацию</span>
                    <div class="downloa-text">
                        <p>Формирование аналитики, которая помогает находить точки роста прибыльности бизнеса и
                            предоставляет взгляд.</p>
                    </div>
                    <a href="<?php echo $options['link'] ?>" download="" class="link-download">скачать презентацию</a>
                </div>
            </div>
        </div>
        <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="REPASSAGE">
        </a>
        <div class="header-nav header-nav-right">
            <div class="write-box">
                <span class="nav-icon-btn write-btn" title="Написать нам"></span>
                <div class="popup-write">
                    <span class="close-popup"></span>
                    <div class="form-contact">
                        <?php echo do_shortcode('[contact-form-7 id="11" title="Написать нам"]'); ?>
                    </div>
                </div>
            </div>
            <div class="menu-box">
                <div class="nav-icon-btn menu-btn">
                    <span class="line"></span>
                </div>
            </div>
        </div>
    </header>

    <div id="content" class="main">
        <?php if (!is_front_page()): ?>
            <div class="breadcrumbs">
                <div class="breadcrumbs-size">
                    <?php if (function_exists('bcn_display')) {
                        bcn_display();
                    } ?>
                </div>
            </div>
        <?php endif; ?>

