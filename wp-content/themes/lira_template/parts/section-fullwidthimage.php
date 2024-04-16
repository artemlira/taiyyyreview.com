 <?php $image = get_sub_field('image'); ?>

 <div class="full-image" style="margin-top: <?php echo get_sub_field('margin_top') ?>px; 
 margin-bottom: <?php echo get_sub_field('margin_bottom') ?>px;">
   <div class="<?php if (get_sub_field('full_width_or_containered') == 'in_container') : ?>  centered-container <?php endif; ?> d-flex  justify-content-<?php echo get_sub_field('align_image') ?>">
     <a class="w-100" href="<?php echo get_sub_field('link_to_image') ?>" <?php if (get_sub_field('link_in_a_new_tab') == 'yes') : ?> target="_blank" <?php endif; ?>>
       <img style="object-fit: <?php if (get_sub_field('contain_or_cropped_image') == 'contain') : ?>contain<?php elseif (get_sub_field('contain_or_cropped_image') == 'crop') : ?>cover<?php endif; ?>; width: 100%;" src="<?php echo $image['url'] ?>" alt="yyy-egyptcasino32">
     </a>
   </div>
 </div>
 <!-- <pre> <?php echo print_r(get_sub_field('margin_top')) ?> </pre> -->