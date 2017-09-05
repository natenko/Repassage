<?php
/*
Template Name: Как это работает
*/
get_header(); ?>
<div class="content-works">
    <div class="works-items">
        <span class="global-title">О том, <?php echo the_title() ?></span>
        <div class="global-box-text">
            <span class="title"><?php echo get_field('заголовок_топ') ?></span>
            <?php echo get_field('контент_топ') ?>
        </div>
        <div class="tabs-works">
            <ul>
                <?php $i = 0;
                while (have_rows('принципы')):the_row();
                    $i++; ?>
                    <li>
                        <a href="#tabs-<?php echo $i; ?>">
                            <span class="number">0<?php echo $i ?>.</span>
                            <span class="title"><?php echo get_sub_field('заголовок') ?></span>
                            <strong><?php echo get_sub_field('подзаголовок') ?></strong>
                            <div class="text"><?php echo get_sub_field('описание') ?></div>
                            <a class="mark-link" href="#tabs-<?php echo $i; ?>">далее</a>
                        </a>
                    </li>
                <?php endwhile; ?>
            </ul>
            <div class="works-seo-tabs">

                <?php $i = 0;

                while (have_rows('принципы')):the_row();
                    $i++; ?>

                    <div class="works-seo-text" id="tabs-<?php echo $i; ?>">
                        <span class="global-title"><?php echo get_sub_field('заголовок') ?></span>
                        <div class="box-text"><?php echo get_sub_field('контент_низ') ?></div>
                    </div>

                <?php endwhile; ?>

            </div>
        </div>
    </div>
    <?php
    include('contact.php');
    ?>
</div>
<?php
include('map.php');
include('seo-text.php'); ?>
<script>
    $(window).on("load", function () {
        offsetElem1 = $('.works-seo-tabs').offset().top - 400;

        $(".works-items .ui-tabs-nav li a").click(function () {
            $("body,html").animate({"scrollTop": offsetElem1}, 200);
        });
        if ($(window).width() > 780) {
            $("html, body").animate({ scrollTop: 370 }, "slow");
        }
        $(function () {
            $(".tabs-works").tabs();
        });
    });
</script>
<?php get_footer(); ?>

