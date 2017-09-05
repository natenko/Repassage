<?php
/*
Template Name: Главная
*/
get_header(); ?>

<div class="contant-home-slide">
    <div class="home-slide" data-ui="home-slide">
        <?php while (have_rows('слайды')):the_row(); ?>
            <?php $image = get_sub_field('изображение'); ?>
                <div class="item" style="background-image:url(<?php echo $image['url'] ?>);">                
                    <div class="box-info">
                        <div class="carousel-output">
                            <span class="carouse-output__current"></span> :<span class="carouse-output__count"></span>
                            <span class="prev-home-arrow"></span>
                            <span class="next-home-arrow"></span>
                        </div>
                        <span class="title"><?php the_sub_field('заголовок') ?></span>
                        <div class="box-text"><?php the_sub_field('описание') ?></div>
                        <div class="slick-nav"></div>
                    </div>
                </div>
        <?php endwhile; ?>
    </div>
    <div class="time-slider">
        <div class="item">
            <div id="clock3">
                <span class="city">Лондон, Великобритания</span>
                <div class="box-clock">
                    <span class="time hours-mark" id="hours3"></span>
                    <span class="time min-mark" id="min3"></span>
                </div>
            </div>
        </div>
        <div class="item">
            <div id="clock2">
                <span class="city">Париж, Франция</span>
                <div class="box-clock">
                    <span class="time hours-mark" id="hours2"></span>
                    <span class="time min-mark" id="min2"></span>
                </div>
            </div>
        </div>
        <div class="item">
            <div id="clock">
                <span class="city">Харьков, Украина</span>
                <div class="box-clock">
                    <span class="time hours-mark" id="hours"></span>
                    <span class="time min-mark" id="min"></span>
                </div>
            </div>
        </div>
        <div class="item">
            <div id="clock4">
                <span class="city">Нью-Йорк, США</span>
                <div class="box-clock">
                    <span class="time hours-mark" id="hours4"></span>
                    <span class="time min-mark" id="min4"></span>
                </div>
            </div>
        </div>
        <div class="item">
            <div id="clock5">
                <span class="city">Токио, Япония</span>
                <div class="box-clock">
                    <span class="time hours-mark" id="hours5"></span>
                    <span class="time min-mark" id="min5"></span>
                </div>
            </div>
        </div>
        <div class="item">
            <div id="clock6">
                <span class="city">Дубай, ОАЭ</span>
                <div class="box-clock">
                    <span class="time hours-mark" id="hours6"></span>
                    <span class="time min-mark" id="min6"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="popup-maintenance">
    <span class="close-popup"></span>
    <span class="title">Приветствуем Вас на сайте бизнес-студии REPASSAGE!</span>
    Сейчас сайт находится на реконструкции. В скором времени мы будем рады представить Вам обновленную версию сайта. Мы всегда готовы ответить на Ваши вопросы по телефону. Благодарим за внимание.
</div> -->
<section class="section section-main__info">
    <header class="section__header">
        <h3 class="ttl-small"><?php echo get_field('заголовок_блока_о_нашей_компании'); ?></h3>
        <div class="section__count carousel-output1">
            0<span class="carouse-output__current1"></span> / 0<span class="carouse-output__count1"></span>
        </div>
    </header>
    
    <div class="our-company-carousel">

        <?php while (have_rows('слайды_о_компании')):the_row(); ?>

            <div class="item">
                <h2 class="ttl-lg"><?php the_sub_field('заголовок') ?></h2>
                <div class="box-text">
                    <p><?php the_sub_field('описание') ?></p>
                    <?php if (get_sub_field('ссылка')): ?>
                        <a href="<?php the_sub_field('ссылка') ?>" class="mark-link">
                         <span>подробнее</span>
                          <svg class="icon">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-arrow-dashed"></use>
                          </svg>
                        </a>
                    <?php endif; ?>
                </div>
            </div>

        <?php endwhile; ?>

    </div>
</section>
<section class="section section-service" data-ui="service-home">
    <header class="section__header">
        <h3><?php echo get_field('заголовок_блока_услуги'); ?></h3>
        <div class="section__count services-home__carousel-output">
            0<span class="services-home__carouse-output__current"></span> / 0<span
                class="services-home__carouse-output__count"></span>
        </div>
    </header>
    <ul>

        <?php
        $mypages = get_pages(array(
            'parent' => 44,
            'sort_column' => 'menu_order',
            'sort_order' => 'ASC'));
        foreach ($mypages as $post) {
            setup_postdata($post);

            get_template_part('template-parts/content', 'service');
        }
        wp_reset_postdata(); ?>
    </ul>
</section>
<section class="content-result">
    <img src="<?php echo get_template_directory_uri(); ?>/images/data/img1.jpg" class="bg-img" alt="bg-img">
    <div class="slider-result">

        <?php while (have_rows('слайды_результаты')):the_row(); ?>

            <div class="item">
                <span class="global-title"><?php echo get_field('заголовок_блока_о_результатах'); ?></span>
                <span class="line-figure"></span>
                <span class="title"><?php the_sub_field('заголовок') ?></span>
                <div class="text-box">
                    <p><?php the_sub_field('описание') ?>.</p>
                </div>
                <div class="carousel-output2">
                    <span class="carouse-output__current2"></span><span class="carouse-output__count2"></span>
                </div>
                <span class="line-figure2"></span>
            </div>

        <?php endwhile; ?>

    </div>
</section>
<section class="section section-tabs"> <!--works-items works-items-home-->
    <h3><?php echo get_field('заголовок_блока_о_том_как_это_работает'); ?></h3>
    <header class="section-tabs-head">
        <h2 class="ttl-lg"><?php echo get_field('заголовок_топ', 8) ?></h2>
        <?php echo get_field('контент_топ', 8) ?>
    </header>
    <div class="tabs-works">
        <ul class="work__list" data-ui="works-slider">
            <?php $i = 0;
            while (have_rows('принципы', 8)):the_row();
                $i++; ?>

                <li class="work__item">
                    <div class="item-title-works">
                        <span class="number">0<?php echo $i ?>.</span>
                        <div class="section__count">
                            0<span class="carouse-current_works"></span> / 0<span class="carouse-count_works"></span>
                        </div>
                        <h2><?php echo get_sub_field('заголовок', 8) ?></h2>
                    </div>
                    <h3><?php echo get_sub_field('подзаголовок', 8) ?></h3>
                    <div class="text"><?php echo get_sub_field('описание', 8) ?></div>
                    <a class="mark-link" href="<?php echo get_permalink(8) ?>#tabs-<?php echo $i; ?>">
                        <span>далее</span>
                        <svg class="icon">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-arrow-dashed"></use>
                        </svg>
                    </a>
                </li>

            <?php endwhile; ?>
        </ul>
    </div>
</section>
<section class="section section-info items-info-content">
    <img src="<?php echo get_template_directory_uri(); ?>/images/data/img2.jpg" class="bg-img" alt="bg-img">
    <div class="items-info-slider">
        <div class="item">
            <span class="figure"></span>
            <span class="title"><?php echo get_field('заголовок1') ?></span>
            <div class="box-text"><?php echo get_field('описание1') ?></div>
        </div>
        <div class="item">
            <span class="figure"></span>
            <span class="title"><?php echo get_field('заголовок2') ?></span>
            <div class="box-text"><?php echo get_field('описание2') ?></div>
        </div>
        <div class="item">
            <span class="figure"></span>
            <span class="title"><?php echo get_field('заголовок3') ?></span>
            <div class="box-text"><?php echo get_field('описание3') ?></div>
        </div>
        <div class="item">
            <span class="figure"></span>
            <span class="title"><?php echo get_field('заголовок4') ?></span>
            <div class="box-text"><?php echo get_field('описание4') ?></div>
            `
        </div>
    </div>
    <div class="items-info-number">
        0<span class="items-info-number-current"></span> / 0<span class="items-info-number-count"></span>
    </div>
</section>
<section id="portfolio" class="section home-work-content">
    <span class="global-title"><?php echo get_field('заголовок_блока_наши_работы'); ?></span>
    <div class="home-works-tabs">
        <ul>

            <?php while (have_rows('категории')):the_row(); ?>

                <li><a href="<?php echo get_sub_field('ссылка') ?>"><?php echo get_sub_field('категория') ?></a></li>

            <?php endwhile; ?>

        </ul>

        <div class="home-work-slider">
            <?php
            $k = 0;
            while (have_rows('категории')):the_row();
                $k++; ?>

                <div class="tabs_info-work">

                    <div class="move-right">&times;</div>
                    <?php if (get_sub_field('проекты') != false): ?>
                        <div class="carousel-output">
                            0<span class="carouse-current<?php echo $k ?>"></span> / 0<span
                                class="carouse-count<?php echo $k ?>"></span>
                        </div>
                    <?php endif; ?>
                    <div class="slider-info-work slider-info-work<?php echo $k ?>">

                        <?php while (have_rows('проекты')):the_row(); ?>

                            <div class="item">

                                <?php if (get_sub_field('заказчик')): ?>

                                    <span class="title-mark">Заказчик :</span>
                                    <span class="client"><?php echo get_sub_field('заказчик') ?></span>

                                <?php endif;
                                if (get_sub_field('отрасль_и_сфера')):?>

                                    <span
                                        class="title-mark">Отрасль и сфера :</span><?php echo get_sub_field('отрасль_и_сфера') ?>

                                <?php endif;
                                if (get_sub_field('задача')):?>

                                    <span class="title-mark">Задача :</span><?php echo get_sub_field('задача') ?>

                                <?php endif;
                                if (get_sub_field('результат')):?>

                                    <span class="title-mark">Результат :</span><?php echo get_sub_field('результат');

                                endif; ?>

                            </div>

                        <?php endwhile; ?>

                    </div>
                </div>

            <?php endwhile; ?>

        </div>
    </div>
</section>
<section class="section home-blog">
    <header class="section__header">
        <h3><?php echo get_field('заголовок_блока_блог'); ?></h3>
        <div class="section__count carousel-output-blog">
            0<span class="carouse-current-blog"></span> / 0<span class="carouse-count-blog"></span>
        </div>
        <a href="/category/blog/" class="mark-link">
            <span>перейти в раздел</span>
              <svg class="icon">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-arrow-dashed"></use>
              </svg>
        </a>
    </header>
    <div class="blog-items">
        <ul class="blog__list">
            <?php $posts = get_field('новости');
            if ($posts) { ?>
                <?php foreach ($posts as $post) {
                    setup_postdata($post);

                    get_template_part('template-parts/content', get_post_format());

                }
                wp_reset_postdata(); ?>
            <?php } ?>
        </ul>
    </div>
</section>
<div class="bottom-wrap-size">
    <?php include('contact.php'); ?>
</div>
<?php 
get_template_part( 'map');
include('seo-text.php'); ?>
<?php get_footer(); ?>
<script>
    $(window).load(function () {

        function map_height(){
            mapElement = $('.home .map-contant').offset().top;
        }

        window.addEventListener("orientationchange", function() {
          // Announce the new orientation number
          map_height();
        }, false);

        var mql = window.matchMedia("(orientation: portrait)");

        if(mql.matches) {  
            map_height();
        } else {
            map_height();
        }

        mql.addListener(function(m) {
          if(m.matches) {
            map_height();
          }
          else {
            map_height();
          }
        });



        if ($(window).width() > 640) {

            offsetElem12 = $('.home .contact').offset().top - 100;

        } else {
            offsetElem12 = $('.home .contact').offset().top - 420;
            offsetElem10 = $('.home #portfolio').offset().top - 420;

            var urlName = window.location.hash,
                portfolio = '#portfolio';
            if (urlName.indexOf(portfolio) == 0) {
                $("body,html").animate({"scrollTop": offsetElem10}, 1200);
            }
        }

        $(".home .anchor-contact").click(function () {
            $(".popup-menu").removeClass("open");
            $("body,html").animate({"scrollTop": offsetElem12}, 1200);
        });

        // $(".home .btn-map").click(function () {
        //     $("body,html").animate({"scrollTop": mapElement}, 1200);
        // });
    });


</script>


<script src="<?php echo get_template_directory_uri(); ?>/js/blog.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/clock.js"></script>


