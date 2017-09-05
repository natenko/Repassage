<li <?php post_class(); ?>>

    <a href="<?php the_permalink() ?>">
        <time class="time" datetime="<?php echo get_the_date(); ?>"><?php echo get_the_date(); ?></time>
        <?php the_post_thumbnail('thumbnail_288x192'); ?>
        <span class="title-blog"><?php the_title() ?></span>
        <?php
        $cat = get_the_category();
        $one_cat = $cat[0]; ?>
        <a href="/category/blog/hi-tech/" class="mark-title-blog"><?php 
            // если мы на странице категории
        if( is_category() )
        echo get_queried_object()->name;

        //echo $cat[0]->cat_name; ?></a>
		<span class="text-info-blog">
			<?php echo get_field('контент_заголовок') ?>
		</span>
        <a href="<?php the_permalink() ?>" class="mark-link"><span>далее</span>
            <svg class="icon">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-arrow-dashed"></use>
              </svg>
        </a>
    </a>
</li>

