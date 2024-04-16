<?php
?>
<!doctype html>
<html <?php the_field('html_lang', 'options'); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name=”robots” content=”noarchive”>
  <link rel="icon" type="image/png" href="<?php the_field('favicon', 'options') ?>">
  <title></title>
  <?php wp_head(); ?>
  <meta name=”robots” content=”noarchive”>
  <link rel="canonical" href="https://taiyyyreview.com/">
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-29SNSNQHS8"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-29SNSNQHS8');
  </script>

  <style>
    .accordion button .accordion-title:before {
      background-image: url(<?php bloginfo('template_url'); ?>/assets/img/faq-img.svg);
    }
  </style>
</head>

<body class="content-color customize-support" data-new-gr-c-s-check-loaded="14.1167.0" data-gr-ext-installed style="background-color: #2d0000;">
  <header style="background-color: #2d0000;">
    <div class="centered-container flex-inline-style">
      <nav id='cssmenu' class="col-12">
        <div class="logo">
          <a href="/">
            <img src="<?php the_field('logotype_header', 'options'); ?>" alt="Logo" />
          </a>
        </div>
        <div id="head-mobile"></div>
        <div class="button"></div>
      </nav>
    </div>
  </header>