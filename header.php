<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex" />
  <title>Engress</title>
  <!-- favicon -->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
    <div class="header_logo"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo (2).svg" alt="Engress"></a></div>
    <nav class="header_nav" id="header_nav">
      <nav class="header-sp-nav">
        <ul class="header-sp-menu">
          <a href="#" class="header-sp-menu-link">
            <li class="header-sp-menu-list">ホーム</li>
          </a>
          <a href="#" class="header-sp-menu-link">
            <li class="header-sp-menu-list">お知らせ</li>
          </a>
          <a href="#" class="header-sp-menu-link">
            <li class="header-sp-menu-list">ブログ</li>
          </a>
          <a href="#" class="header-sp-menu-link">
            <li class="header-sp-menu-list">コース・料金</li>
          </a>
        </ul>
        <div class="header_sp-btn-box"><a href="#">
            <div class="square-request-btn header_sp-btn"><span class="square-request-btn-text">資料請求 </span></div>
          </a>
          <a href="#">
            <div class="contact-btn header_sp-btn"><span class="contact-btn-text">お問い合わせ </span></div>
          </a>
        </div>
        <div class="tel-box sp-tel-box">
          <small class="tel-hour">平日08:00〜20:00</small>
          <p class="tel-number sp-tel-number"><a href="tel:0123-456-7890" class="p">0123-456-7890</a></p>
        </div>
      </nav>
      <div class="ham js-trigger" id="ham"><a href="#"><span class="ham-line ham-line1"></span><span class="ham-line ham-line2"></span><span class="ham-line ham-line3"></span></a></div>
      <div class="black-bg" id="js-black-bg"></div>
      <ul class="header_list">
        <li class="header_list-item"><a href="#" class="p">ホーム</a></li>
        <li class="header_list-item"><a href="#" class="p">お知らせ</a></li>
        <li class="header_list-item"><a href="#" class="p">ブログ</a></li>
        <li class="header_list-item"><a href="#" class="p">コース・料金</a></li>
      </ul>
      <div class="header_right">
        <div class="tel-box"><small class="tel-hour">平日08:00〜20:00</small>
          <p class="tel-number"><a href="tel:0123-456-7890" class="p">0123-456-7890</a></p>
        </div>
        <a href="#">
          <div class="square-request-btn header_pc-btn"><span class="square-request-btn-text">資料請求 </span></div>
        </a>
        <a href="#">
          <div class="contact-btn header_pc-btn"><span class="contact-btn-text">お問い合わせ </span></div>
        </a>
      </div>
    </nav>
  </header>
