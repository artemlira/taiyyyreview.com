 <?php
  $faqs = get_sub_field('faq_list');
  ?>





 <div class="faq-section" style="margin-top: <?php echo get_sub_field('margin_top') ?>px; margin-bottom: <?php echo get_sub_field('margin_bottom') ?>px; background-color:#2d0000;">
   <div class="centered-container">
     <<?php echo get_sub_field('title_tag') ?> class="def-title"><?php echo get_sub_field('title') ?></<?php echo get_sub_field('title_tag') ?>>
     <div class="accordion faq-list" itemscope itemtype="https://schema.org/FAQPage">

       <?php foreach ($faqs as $item) : ?>
         <!-- faq item -->
         <div class="accordion-item faq_item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" style="background-color: <?php echo get_sub_field('background_color') ?>;">
           <button id=" accordion-button" aria-expanded="false">
             <span class="icon" aria-hidden="true"></span>
             <span class="accordion-title" itemprop="name" style="color: <?php echo get_sub_field('text_color') ?>;"><?php echo $item['question'] ?></span>
           </button>
           <div class="accordion-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
             <div itemprop="text">
               <p>
               <p>
                 <span style="font-weight: 400; color: <?php echo get_sub_field('text_color') ?>;"><?php echo $item['answer'] ?></span>
               </p>
               </p>
             </div>
           </div>
         </div>
       <?php endforeach ?>

     </div>
   </div>
 </div>