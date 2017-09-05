<?php

function setup()
{

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1200, 9999);
    add_image_size('baner_940x290', 940, 290, true);
    add_image_size('thumbnail_288x192', 288, 192, true);
    register_nav_menus(array(
        'primary' => __('Главное меню'),
        'primary__left' => __('Главное меню (левый блок)'),
        'primary__middle' => __('Главное меню (центральный блок)'),
        'primary__right' => __('Главное меню (правый блок)'),
        'service' => __('Услуги'),
    ));
}

add_action('after_setup_theme', 'setup');

function scripts()
{

    wp_enqueue_style('repassage-style', get_stylesheet_uri());
    wp_enqueue_style('all', get_template_directory_uri() . "/css/all.css");
    wp_enqueue_style('owl', get_template_directory_uri() . "/css/owl.css");
    wp_enqueue_style('slick', get_template_directory_uri() . "/css/slick.css");
    wp_enqueue_style('responsive', get_template_directory_uri() . "/css/responsive.css");
    wp_enqueue_style('main', get_template_directory_uri() . "/src/build/css/main.css");

    wp_deregister_script('jquery');
    wp_register_script('jquery', 'http://code.jquery.com/jquery-2.2.1.min.js');
    wp_enqueue_script('jquery');

    wp_enqueue_script('googleapis', "https://maps.googleapis.com/maps/api/js?key=AIzaSyCCz-_aUVGWiYwS1hXG6O0C0HiAvynuUqI");

}

add_action('wp_enqueue_scripts', 'scripts');

include('settings.php');
/* Подсчет количества посещений страниц
---------------------------------------------------------- */
add_action('wp_head', 'kama_postviews');
function kama_postviews()
{

    /* ------------ Настройки -------------- */
    $meta_key = 'views';  // Ключ мета поля, куда будет записываться количество просмотров.
    $who_count = 0;            // Чьи посещения считать? 0 - Всех. 1 - Только гостей. 2 - Только зарегистрированных пользователей.
    $exclude_bots = 0;            // Исключить ботов, роботов, пауков и прочую нечесть :)? 0 - нет, пусть тоже считаются. 1 - да, исключить из подсчета.

    global $user_ID, $post;
    if (is_singular()) {
        $id = (int)$post->ID;
        static $post_views = false;
        if ($post_views) return true; // чтобы 1 раз за поток
        $post_views = (int)get_post_meta($id, $meta_key, true);
        $should_count = false;
        switch ((int)$who_count) {
            case 0:
                $should_count = true;
                break;
            case 1:
                if ((int)$user_ID == 0)
                    $should_count = true;
                break;
            case 2:
                if ((int)$user_ID > 0)
                    $should_count = true;
                break;
        }
        if ((int)$exclude_bots == 1 && $should_count) {
            $useragent = $_SERVER['HTTP_USER_AGENT'];
            $notbot = "Mozilla|Opera"; //Chrome|Safari|Firefox|Netscape - все равны Mozilla
            $bot = "Bot/|robot|Slurp/|yahoo"; //Яндекс иногда как Mozilla представляется
            if (!preg_match("/$notbot/i", $useragent) || preg_match("!$bot!i", $useragent))
                $should_count = false;
        }

        if ($should_count)
            if (!update_post_meta($id, $meta_key, ($post_views + 1))) add_post_meta($id, $meta_key, 1, true);
    }
    return true;
}

// запрет обновления выборочных плагинов
function filter_plugin_updates($update)
{
    global $DISABLE_UPDATE; // см. wp-config.php
    if (!is_array($DISABLE_UPDATE) || count($DISABLE_UPDATE) == 0) {
        return $update;
    }
    foreach ($update->response as $name => $val) {
        foreach ($DISABLE_UPDATE as $plugin) {
            if (stripos($name, $plugin) !== false) {
                unset($update->response[$name]);
            }
        }
    }
    return $update;
}

add_filter('site_transient_update_plugins', 'filter_plugin_updates');