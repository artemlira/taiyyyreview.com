<?php get_header(); ?>

<main class="main-container" style="background-color: #2d0000;">



  <?php if (have_rows('flexible_content')) : ?>
    <?php while (have_rows('flexible_content')) : the_row(); ?>
      <?php if (get_row_layout() == 'full_width_image') : ?>
        <?php get_template_part('parts/section', 'fullwidthimage') ?>
      <?php elseif (get_row_layout() == 'title_and_text') : ?>
        <?php get_template_part('parts/section', 'titleandtext') ?>
      <?php elseif (get_row_layout() == 'default_buttom') : ?>
        <?php get_template_part('parts/section', 'defaultbuttom') ?>
      <?php elseif (get_row_layout() == 'faq') : ?>
        <?php get_template_part('parts/section', 'faq') ?>
      <?php elseif (get_row_layout() == 'image_and_content') : ?>
        <?php get_template_part('parts/section', 'imageandcontent') ?>
      <?php elseif (get_row_layout() == 'providers') : ?>
        <?php get_template_part('parts/section', 'providers') ?>
      <?php elseif (get_row_layout() == 'carousel_slider') : ?>
        <?php get_template_part('parts/section', 'carouselslider') ?>
      <?php elseif (get_row_layout() == 'hero_slider') : ?>
        <?php get_template_part('parts/section', 'heroslider') ?>
      <?php elseif (get_row_layout() == 'custom_text') : ?>
        <?php get_template_part('parts/section', 'customtext') ?>

      <?php endif; ?>
    <?php endwhile; ?>
  <?php endif; ?>

</main>

<?php get_footer(); ?>