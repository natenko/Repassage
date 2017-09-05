<?php
/*
Template Name: О нас
*/
get_header(); ?>
<div class="about-content">
    <span class="global-title"><?php echo the_title() ?></span>

    <?php if (have_rows('табы')): ?>
        <div class="about-tabs tabs">
            <ul class="list-title-tabs">

                <?php
                $i = 0;
                while (have_rows('табы')) : the_row();
                    $i++ ?>

                    <li><a href="#tabs-<?php echo $i; ?>"><?php the_sub_field('заголовок') ?></a></li>

                <?php endwhile; ?>

            </ul>
            <div class="info-tabs">
                <?php $j = 1; ?>
                <?php while (have_rows('табы')) : the_row(); ?>

                    <div class="text-box-tabs" id="tabs-<?php echo $j; ?>">
                        <span class="title"><?php the_sub_field('заголовок') ?></span>
                        <?php the_sub_field('контент') ?>
                    </div>
                    <?php $j++; ?>
                <?php endwhile; ?>

            </div>
        </div>

    <?php endif;
    include('contact.php'); ?>
</div>
<?php include('map.php'); ?>
<?php get_footer(); ?>
<script>
    $(window).on('load', function () {
        setTimeout(function(){
        $(function () {
            $('html, body').animate({
                scrollTop: $('body').offset().top
            }, 500);
        });
    },100);
    });
</script>

