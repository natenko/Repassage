<?php get_header(); ?>

<div class="services">
    <div class="services-box">
        <div class="services-title">
            <?php
            $cat = get_the_category()[0];
            $cat_name = $cat->name;
            ?>
            <span class="title-services"><?php echo $cat_name ?><span><?php echo the_title() ?></span></span>
            <a href="<?php echo get_category_link(1) ?>" class="next-page-services">выбрать другую статью</a>
        </div>

        <?php if (get_field('банер')): ?>

            <div class="services-img">
                <?php $image = get_field('банер'); ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>"/>
            </div>

        <?php endif; ?>

        <div class="services-info">
            <h3><?php echo get_field('контент_заголовок') ?></h3>
            <?php while (have_posts()) : the_post();
                the_content();
            endwhile; ?>
        </div>
    </div>
    <?php
    include('contact.php');
    ?>
</div>
<?php include('map.php');
include('seo-text.php'); ?>

<?php get_footer(); ?>
