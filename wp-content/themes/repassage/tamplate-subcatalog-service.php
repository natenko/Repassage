<?php
/*
Template Name: -Подкаталог услуг
*/
get_header(); ?>
<div class="services services-group">
    <div class="services-box">
        <div class="services-title">
            <?php
            $id_post = get_the_ID();
            $ids = get_ancestors($id_post, 'page');
            $id = $ids[0];
            $image = get_field('иконка'); ?>
            <img src="<?php echo $image['url']; ?>" class="icon-services" alt="<?php echo $image['title']; ?>"/>
            <span class="title-services"><?php echo get_the_title($id) ?><span><?php echo the_title() ?></span></span>
            <div href="#" class="next-page-services">
                выбрать другую группу услуг
                <div class="popup-services">
                    <span class="close-popup"></span>

                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'service',
                    ));
                    ?>
                </div>
            </div>
        </div>
        <div class="services-group-info">
            <div class="info-services"><?php echo get_field('контент') ?></div>
            <ul>
                <?php
                $mypages = get_pages(array(
                    'parent' => $post->ID,
                    'sort_column' => 'menu_order',
                    'sort_order' => 'ASC'));
                foreach ($mypages as $post) {
                    setup_postdata($post); ?>

                    <li>
                        <a href="<?php the_permalink() ?>">
                            <span class="title"><?php the_title(); ?></span>
                            <div class="text">
                                <h3><?php echo get_field('контент_заголовок') ?></h3>
                                <?php the_content(''); ?>
                            </div>
                        </a>
                    </li>

                <?php }
                wp_reset_postdata(); ?>

            </ul>
        </div>
    </div>
    <?php include('contact.php'); ?>
</div>
<?php include('map.php');
include('seo-text.php'); ?>
<?php get_footer(); ?>

