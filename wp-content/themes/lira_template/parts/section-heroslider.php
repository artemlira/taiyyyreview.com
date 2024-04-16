<?php
$list = get_sub_field('slider');
?>

<div class="hero-slider" style="padding-top: <?php echo get_sub_field('margin_top'); ?>px; padding-bottom: <?php echo get_sub_field('margin_top'); ?>px;">
  <div class="centered-container">
    <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-rtl">
      <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(3750px, 0px, 0px);">
        <?php foreach ($list as $item) : ?>
          <!-- slider item -->

          <div class="swiper-slide item-slide swiper-slide-duplicate-active" style="background-image: url(<?php echo $item['image'] ?>); width: 1250px;" data-swiper-slide-index="2">

            <div class="content-info-slide">
              <h2><?php echo $item['slide_title_top'] ?></h2>
              <p><?php echo $item['slide_content_center'] ?></p>
              <h3><?php echo $item['slide_title_bottom'] ?></h3>
              <div class="btn-wrap-gradient">
                <a class="gradient-border-mask" href="<?php echo $item['button_url'] ?>"><?php echo $item['button_name'] ?></a>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
      <div class="swiper-pagination"></div>
      <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </div>
  </div>
</div>