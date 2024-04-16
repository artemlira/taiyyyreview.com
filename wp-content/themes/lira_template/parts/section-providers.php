  <?php $list = get_sub_field('provider_list'); ?>


  <div class="providers" style="margin-top: <?php echo get_sub_field('margin_top'); ?>px; margin-bottom: <?php echo get_sub_field('margin_bottom'); ?>px; background-color: <?php echo get_sub_field('background_color'); ?>">
    <div class="centered-container">
      <<?php echo get_sub_field('title_tag'); ?> class="title-style"><?php echo get_sub_field('title'); ?></<?php echo get_sub_field('title_tag'); ?>>
      <div class="providers__wrapper gap-4">
        <?php foreach ($list as $item) : ?>
          <!-- providers item -->
          <div class="col-6 col-sm-4 col-md-3 col-lg-2">
            <div class="providers__wrapper__item " style="background-color: #181a20">
              <a href=" <?php echo $item['link'] ?>">
                <img src="<?php echo $item['image'] ?>" alt="">
              </a>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>