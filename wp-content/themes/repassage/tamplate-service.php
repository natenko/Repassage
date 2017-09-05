<?php
/*
Template Name: --Услуга
*/
get_header(); ?>
<div class="services">
    <div class="services-box">
        <div class="services-title">
            <?php
            $id_post = get_the_ID();
            $ids = get_ancestors($id_post, 'page');
            $id = $ids[0];
            $image = get_field('иконка', $id); ?>
            <img src="<?php echo $image['url']; ?>" class="icon-services" alt="<?php echo $image['title']; ?>"/>
            <span class="title-services"><?php echo get_the_title($id) ?><span><?php echo the_title() ?></span></span>
            <div href="#" class="next-page-services">
                выбрать другую услугу
                <div class="popup-services">
                    <span class="close-popup"></span>
                    <ul>
                        <?php
                        $mypages = get_pages(array(
                            'parent' => $id,
                            'sort_column' => 'menu_order',
                            'sort_order' => 'ASC'));
                        foreach ($mypages as $post) {
                            setup_postdata($post); ?>

                            <li>
                                <a href="<?php the_permalink() ?>">
                                    <span class="title"><?php the_title(); ?></span>
                                </a>
                            </li>

                        <?php }
                        wp_reset_postdata(); ?>
                    </ul>
                </div>
            </div>
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
                the_content();endwhile; ?>

        </div>
    </div>
    <?php include('contact.php'); ?>
</div>
<?php include('map.php');
include('seo-text.php'); ?>
<?php get_footer(); ?>

