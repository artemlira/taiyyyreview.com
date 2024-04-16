<div class="default-title-and-content" data-index="2" style="padding-top: <?php echo get_sub_field('margin_top') ?>px; padding-bottom: <?php echo get_sub_field('margin_bottom') ?>px;">
  <div class="centered-container" style="color: <?php echo get_sub_field('text_color') ?>; background-color: <?php echo get_sub_field('background_color') ?>">
    <<?php echo get_sub_field('title_tag') ?> <?php if (get_sub_field('title_tag') != 'h1') : ?> class="title-style" <?php endif; ?>><?php echo get_sub_field('title') ?></<?php echo get_sub_field('title_tag') ?>>
    <?php echo get_sub_field('text') ?>
  </div>
</div>