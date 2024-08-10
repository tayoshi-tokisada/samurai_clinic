<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>トップページ｜SAMURAI整体院</title>
    <meta name="description" content="当院では、問診にてお客様の症状や生活スタイル、ご希望を丁寧にお伺いした上で施術方針を立てていきます。また、根本的に症状を改善するために、お客様ご自身で行えるケアやストレッチもお伝えします。ご不安な点や疑問点などお気軽にご相談くださいませ。">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Shippori+Mincho&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/styles/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/styles/header.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/styles/access.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/styles/footer.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/styles/index.css">
    <?php wp_head();?>
  </head>

  <body>
    <header>
      <!-- ロゴ -->
      <a href="<?php echo home_url();?>">
        <img class="titleLogo" src="<?php echo get_template_directory_uri();?>/image/logo/logo.svg" alt="タイトルロゴ">
      </a>
      <!-- PC用nav -->
      <nav id="nav-pc">
        <a href="<?php echo home_url();?>">ホーム</a>
        <a href="<?php echo home_url();?>/about">当院について</a>
        <a href="<?php echo home_url();?>/course">コース・料金</a>
        <a href="<?php echo home_url();?>/news">お知らせ</a>
        <a href="<?php echo home_url();?>/voice">お客様の声</a>
        <button class="contactHeaderBtn">
          <a href="<?php echo home_url();?>/contact">ご予約・お問い合わせ</a>
        </button>
      </nav>
      <!-- SP用メニューボタン -->
      <img id="menu-sp" src="<?php echo get_template_directory_uri();?>/image/SP_Menu.svg" alt="">
      <!-- SP用nav -->
      <nav id="nav-sp">
        <div>
          <div>
            <a href="<?php echo home_url();?>">
              <img class="titleLogo" src="<?php echo get_template_directory_uri();?>/image/logo/logo.svg" alt="タイトルロゴ">
            </a>
            <img id="menuClose" src="<?php echo get_template_directory_uri();?>/image/SP_MenuClose.svg" alt="">
          </div>
          <div>
            <p>メニュー</p>
            <a href="<?php echo home_url();?>">ホーム</a>
            <a href="<?php echo home_url();?>/about">当院について</a>
            <a href="<?php echo home_url();?>/course">コース・料金</a>
            <a href="<?php echo home_url();?>/news">お知らせ</a>
            <a href="<?php echo home_url();?>/voice">お客様の声</a>
            <button class="contactHeaderBtn">
              <a href="<?php echo home_url();?>/contact">ご予約・お問い合わせ</a>
            </button>
          </div>
        </div>
      </nav>
    </header>