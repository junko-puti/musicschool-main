<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta name="description" content="「音楽で生きる」を叶えるミュージックスクール">
  <title>きたむらミュージックスクール</title> -->
  <meta name="apple-mobile-web-app-capable" content="no">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
  <!-- Splide -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css"> -->
  <!-- <link rel="stylesheet" href="css/reset.css"> -->
  <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css"> -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(is_front_page() ? 'top-page' : ''); ?> style="display: none;"><!--FOUT（読み込み中のチラつき）を防ぐ $('body').show();とセット-->
  <!-- <body class="top-page" style="display: none;"> -->

  <header class="l-header header js-header">
    <div class="l-inner header__inner">
      <?php if (is_front_page() || is_search()) : ?>
        <h1 class="header__logo logo">
      <?php else : ?>
        <div class="header__logo logo">
      <?php endif; ?>
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/logo.svg" media="(min-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-sp.svg" alt="きたむらミュージックスクール">
          </picture>
          <span class="logo__text">
            <span class="logo__line1">きたむら</span>
            <span class="logo__line2">ミュージックスクール</span>
          </span>
        </a>
      <?php if (is_front_page() || is_search()) : ?>
        </h1>
      <?php else : ?>
        </div>
      <?php endif; ?>
      <!-- PC用メニュー -->
      <nav class="header__nav u-pc">
        <?php
        wp_nav_menu(
          array(
            'menu_class'     => 'l-header__nav-ul',
            'theme_location' => 'primary',
            'container'      => false,
          )
        );
        ?>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>"
          class="c-btn c-btn--h-contact">
          お問い合わせ
        </a>
      </nav>
    </div>
    <!-- ハンバーガーボタン（SP用） -->
    <div class="c-humburger u-sp" id="humburger">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <!-- SP用ドロワーメニュー -->
    <nav class="header__drawer u-sp" id="drawer">
      <?php
      wp_nav_menu(
        array(
          'menu_class'     => 'header__menu',
          'theme_location' => 'drawer',
          'container'      => false,
        )
      );
      ?>
    </nav>
  </header>
  <div class="l-wrapper">
