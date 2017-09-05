<?php $options = get_option('theme_settings'); ?>
<div class="contact">
    <span class="global-title">Контакты</span>
    <div class="info-contact">
        <span class="title"><?php echo $options['title'] ?></span>
        <div class="item-info-contact">
            <span>телефоны:</span>
            <a href="tel:<?php echo $options['phone-1'] ?> "><?php echo $options['phone-1'] ?></a>
            <a href="tel:<?php echo $options['phone-2'] ?>"><?php echo $options['phone-2'] ?></a>
        </div>
        <div class="item-info-contact">
            <span>e-mail:</span>
            <a href="mailto:<?php echo $options['email'] ?>"><?php echo $options['email'] ?></a>
        </div>
        <div class="item-info-contact">
            <span>skype:</span>
            <a href="skype: <?php echo $options['skype'] ?>"><?php echo $options['skype'] ?></a>
        </div>
    </div>
    <div class="form-contact">
        <?php echo do_shortcode('[contact-form-7 id="11" title="Написать нам"]'); ?>
    </div>
</div>