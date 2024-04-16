  <div class="centered-container">
    <div class="default-btn d-flex justify-content-<?php echo get_sub_field('align_buttom') ?>" style="margin-top: <?php echo get_sub_field('margin_top') ?>px;  margin-bottom: <?php echo get_sub_field('margin_bottom') ?>px;">
      <a class="gradient-border-mask w-100" href="<?php echo get_sub_field('link_button') ?>" <?php if (get_sub_field('open_in_a_new_window') == 'yes') : ?> target="_blank" <?php endif; ?>><?php echo get_sub_field('name_of_button') ?></a>
    </div>
  </div>