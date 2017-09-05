<?php get_header(); ?>

<div class="catalog-blog">

    <?php if (have_posts()) : ?>

        <div class="blog-nav">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="">вернуться на главную</a>
            <span class="global-title"><?php the_archive_title() ?></span>
            <div class="sort">

                <?php
                $order = "&orderby=title&order=ASC";
                if ($_GET['sorty'] == 'data') {
                    $order = "&orderby=data&order=DESC";
                }
                if ($_GET['sorty'] == 'name') {
                    $order = "&orderby=name&order=DESC";
                }
                $url = $_SERVER['REQUEST_URI'];
                $curUrl = explode("?", $url);
                wp_reset_query();
                ?>

                <form id="order" action="<?php echo $curUrl[0]; ?>" method="get">
                    <span>Сортировать по :</span>
                    <label><input type="submit" name="sorty" value="data">дате</label>
                    /
                    <label><input type="submit" name="sorty" value="name">имени</label>
                </form>
            </div>
        </div>
        <ul class="list-link-blog">
            <?php
            $args = array(
                'exclude' => '1',
                'hierarchical' => '0',
                'show_option_none' => ('Категорий не обнаружено'),
                'show_last_update' => 0,
                'show_count' => 0,
                'child_of' => 0,
                'title_li' => '',
                'taxonomy' => 'category',
                'hide_title_if_empty' => false,
            );

            wp_list_categories($args); ?>

        </ul>
        <?php $posts = query_posts($query_string . $order);
        echo '<div class="carousel-output-blog">0<span class="carouse-current-blog"></span>  /  0<span class="carouse-count-blog"></span>
	            </div><b class="line"></b><ul class="list-blog">';
        while (have_posts()) : the_post();

            get_template_part('template-parts/content', get_post_format());

        endwhile;
        echo '</ul>';
        the_posts_pagination(array(
            'prev_text' => __(''),
            'next_text' => __(''),
            'screen_reader_text' => __(' '),
            'end_size' => 1,
            'mid_size' => 2,
            'before_page_number' => '',
        ));

    else :
        get_template_part('template-parts/content', 'none');
    endif;

    include('contact.php'); ?>
</div>
<?php include('map.php'); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/blog.js"></script>

<?php get_footer(); ?>
