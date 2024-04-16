<?php


?>


<div class="content-and-image" style=" background-image: url(<?php echo get_sub_field('background_image') ?>); padding-top: <?php echo get_sub_field('margin_top') ?>px; padding-bottom: <?php echo get_sub_field('margin_bottom') ?>px;  background-color: <?php echo get_sub_field('background_color'); ?>;">
  <div class="centered-container">
    <div class="content-and-image__wrapper">
      <div class="content-and-image__wrapper__item d-flex flex-wrap flex-row <?php if (get_sub_field('align_image') == 'right') : ?> flex-row-reverse <?php endif; ?>">

        <div class="content-and-image__wrapper__item__content col-lg-6" style="color: <?php echo get_sub_field('color_text'); ?>">
          <<?php echo get_sub_field('title_tag') ?> class="content-and-image__wrapper__item__content__title"><?php echo get_sub_field('title') ?></<?php echo get_sub_field('title_tag') ?>>
          <p><?php echo get_sub_field('content') ?></p>
          <?php if (get_sub_field('button_name')) : ?>
            <a class="button-content" href="<?php echo get_sub_field('button_link') ?>" style="color: <?php echo get_sub_field('button_text_color'); ?>; background-color: <?php echo get_sub_field('button_background'); ?>;" <?php if (get_sub_field('button_in_a_new_window') == 'yes ') : ?> target="_blank" <?php endif; ?>><?php echo get_sub_field('button_name') ?></a>
          <?php endif; ?>
        </div>
        <div class="content-and-image__wrapper__item__image-block col-lg-6">
          <img src="<?php echo get_sub_field('image') ?>" alt="web_wheel_01.png">
        </div>
      </div>
    </div>
  </div>
</div>