<section class="b-hero <?php if ($block->get('background_image')) : ?>b-hero--with-image<?php endif;?> <?php if ($block->get('scheme')) : ?>b-hero--<?php echo $block->get('scheme'); ?><?php endif;?>">

    <?php echo \Evermade\Swiss\sprint('<div class="b-hero__background" style="background-image:url(%s);"></div>', $block->getImageUrl('hero-xxl', 'background_image')); ?>

    <?php echo \Evermade\Swiss\sprint('<div class="c-youtube-api-player js-youtube-api-player" data-video-id="%s" data-autoplay="1" data-autoplay-viewport="1" data-loop="1" data-sound="0" data-cover="1"></div>', $block->get('youtube_id')); ?>

    <?php if($block->get('overlay')): ?>
        <div class="c-overlay"></div>
    <?php endif; ?>

    <div class="b-hero__container">
        <div class="b-hero__content">
            <?php echo \Evermade\Swiss\sprint('<div class="h-wysiwyg-html">%s</div>', $block->get('text')); ?>
        </div>
    </div><!-- end of b-hero__container -->
</section><!-- end of b-hero -->
<div class="b-hero__koro"></div>
