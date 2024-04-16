 <?php
  $list = get_sub_field('slider_carousel');

  ?>


 <div class="carousel-section" style="margin-top: <?php echo get_sub_field('margin_top'); ?>px; margin-bottom: <?php echo get_sub_field('margin_bottom'); ?>px;">
   <div class="centered-container">
     <<?php echo get_sub_field('title_tag'); ?> class="title-style"><?php echo get_sub_field('title'); ?></<?php echo get_sub_field('title_tag'); ?>>
     <div class="carousel-wrapper">
       <div class="carousel-gallery">
         <div dir="rtl" class="swiper-container">
           <div class="swiper-wrapper">
             <?php foreach ($list as $item) : ?>
               <!-- slider item -->
               <div class="swiper-slide carousel-item-block" style="background-color: #333749;">
                 <img src="<?php echo $item['image'] ?>" alt="web_wheel_01.png">
                 <div class="carousel-item__info">
                   <h3><?php echo $item['slide_title'] ?></h3>
                   <p><?php echo $item['slide_content'] ?></p>
                   <a class="gradient-border-mask" href="<?php echo $item['button_url'] ?>"><?php echo $item['button_name'] ?></a>
                 </div>
               </div>
             <?php endforeach ?>
           </div>
           <div class="navig-wrapp">
             <div class="button-prev">
               <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon-right.svg" alt="next">
             </div>
             <div class="button-next">
               <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icon-left.svg" alt="prev">
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>