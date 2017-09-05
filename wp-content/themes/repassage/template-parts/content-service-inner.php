<li class="row__item">
    <div class="row__header">
        <a class="icon" href="<?php the_permalink() ?>">
        <?php $image = get_field('иконка');
        $image_h = get_field('иконка_при_наведении'); ?>
            <img src="<?php echo $image['url']; ?>" class="img" alt="<?php echo $image['title']; ?>"/>
            <img src="<?php echo $image_h['url']; ?>" class="img-h" alt="<?php echo $image_h['title']; ?>"/>
        </a>
        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        <h3><?php the_field('service_h3'); ?></h3>
    </div>

    <div class="row__content">
        <a href="<?php the_permalink() ?>">
            <?php echo get_field('контент') ?>
        </a>
    </div>
</li>

