<li class="service-home__item">
    <h2 class="service__ttl">
    	<span class="figure">
    		<a href="<?php the_permalink() ?>">
    		<?php $image = get_field('иконка');
            $image_h = get_field('иконка_при_наведении'); ?>
                <img src="<?php echo $image['url']; ?>" class="img" alt="<?php echo $image['title']; ?>"/>
    		    <img src="<?php echo $image_h['url']; ?>" class="img-h" alt="<?php echo $image_h['title']; ?>"/>
    		</a>
    	</span>
        <span class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></span>
    </h2>
    <div class="text">

        <?php echo get_field('контент') ?>

    </div>
    <a class="mark-link" href="<?php the_permalink() ?>">подробнее</a>
</li>

