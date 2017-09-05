<?php if (get_field('seo_заголовок') or get_field('seo_контент')): ?>

    <div class="seo-text">

        <?php if (get_field('seo_заголовок')): ?>

            <span class="global-title"><?php echo get_field('seo_заголовок') ?></span>

        <?php endif;
        if (get_field('seo_контент')):?>

            <div class="scroll-text jcf-scrollable">
                <?php echo get_field('seo_контент') ?>
            </div>

        <?php endif; ?>

    </div>

<?php endif; ?>