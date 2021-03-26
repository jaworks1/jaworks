<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="日本人へのTOEFL指導歴豊かな講師陣の コーチング型TOEFLスクール" >
  <?php wp_head(); ?>
  <title>Engress</title>
</head>
<body>
  <header class="header">
    <div class="header__inner inner">
      <div class="header__logo-wrapper">
        <img class="header__logo" src="<?php echo get_template_directory_uri() ?>/img/logo-story-picture.png" alt="header-logo">
      </div>
        <?php
        wp_nav_menu(
        //.header-listを置き換えて、PC用メニューを動的に表示する
        array(
        'depth' => 1,
        'theme_location' => 'global', //グローバルメニューをここに表示すると指定
        'container' => 'nav',
        'container_class' =>'header__nav',
        'menu_class' => 'header__list',
        )
        );
        ?>

         <div class="header__info hidden-sp">
           <div class="header__info-time info-time">平日08:00〜20:00</div>
           <a href="tel:+8101234567890" class="header__info-tell info-tell">0123-456-7890</a>
         </div>
           <!-- /.header__info -->
           <div class="header__btn-wrapper hidden-sp">
            <a href="#" class="btn">資料請求</a>
            <a href="<?php get_template_part('template/contact') ?>" class="header__btn btn btn--main_theme">お問い合わせ</a>
           </div>
           <!-- /.header__btn-wrapper -->
    </div>
       <!-- /.header__inner -->
  </header>
   <!-- /.header -->