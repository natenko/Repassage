<?php
/*
Template Name: Каталог услуг
*/
get_header(); ?>
<div class="banner">
    <div class="banner__pic">
      <img src="https://www.maureva.com/wp-content/uploads/2016/07/Business-Intelligence-Applications.jpg" alt="banner">
    </div>
    <div class="banner__info">
      <h1><?php echo the_title() ?></h1>
      <h2><?php echo get_field('подзаголовок') ?></h2>
      <p><?php echo get_field('контент_сервисы') ?></p>
    </div>
</div>
<div class="catalog-services catalog-lt">
    <div class=""><!--services-home-->
        <div class="services-home__carousel-output">
            0<span class="services-home__carouse-output__current"></span> / 0<span
                class="services-home__carouse-output__count"></span>
        </div>
        <div class="global-box-text">
            
        </div>
        <ul class="row">

            <?php
            $mypages = get_pages(array(
                'parent' => $post->ID,
                'sort_column' => 'menu_order',
                'sort_order' => 'ASC'));
            foreach ($mypages as $post) {
                setup_postdata($post);

                get_template_part('template-parts/content', 'service-inner');

            }
            wp_reset_postdata(); ?>

        </ul>
    </div>
    <?php include('contact.php'); ?>
</div>
<?php include('map.php');
include('seo-text.php'); ?>
<?php get_footer(); ?>
<script>
    const outputServiceCounts = $('.services-home__carouse-output__count');
    const outputServiceCurrents = $('.services-home__carouse-output__current');
    $(".services-home ul").on('init', function () {
        outputServiceCounts.html($('.services-home ul .slick-slide').length);
        outputServiceCurrents.html(1);
    });
    $(".services-home ul").on('afterChange', function (event, slick, current) {
        outputServiceCounts.html($('.services-home ul .slick-slide').length);
        outputServiceCurrents.html(current + 1);
    });
</script>

