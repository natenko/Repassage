<?php get_header(); ?>
<div class="services">
    <div class="services-box">
        <div class="services-title">
            <span class="title-services"><?php echo the_title() ?></span>
        </div>
        <div class="services-info">
            <?php while (have_posts()) : the_post();
                the_content();
            endwhile; ?>
        </div>
    </div>
    <?php
    include('contact.php');
    ?>
</div>
<?php include('map.php'); ?>
<?php get_footer(); ?>

