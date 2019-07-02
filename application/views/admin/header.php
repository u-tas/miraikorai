<!DOCTYPE html>

<html lang="ja">

<head>
    <title>未来コライ 管理画面| miraikorai admin<?php if($title != null) {echo " | ".$title;} ?> </title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="未来コライは、混声のバーバーショップを歌うカルテットグループです。">
    <meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="format-detection" content="telephone=no" />
    <?= link_tag("css/style.css")?>
    <?= link_tag("css/color_style.css")?>
    <?= link_tag("css/admin_style.css")?>
    
<!--    <script src="<?= base_url("js/language.js")?>"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--web icon-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

</head>

<body>
  <header>
      <div class="header_top"></div>
      <nav class="header_nav">
          <div class="header_menu_sub">
            <div class="header_logo">管理画面</div>
              <div class="header_menu_right">
<div class="pc_only">
                </div>
              </div>
          </div>
          <div class="pc_only">
          <nav class="header_menu_main">
            <ul>
                <li><?= anchor('admin/information', 'INFORMATION') ?></li>
                <li><?= anchor('admin/information', 'HISTORY') ?></li>
                <li><?= anchor('stage', 'STAGE') ?></li>
                <li><?= anchor('gallery', 'GALLERY') ?></li>
                <li><?= anchor('blog', 'BLOG') ?></li>
            </ul>
          </nav>
        </div>

      </nav>
<div class="sp_only">
      <input type="checkbox" class="check" id="checked">
               <label class="menu-btn" for="checked">
                   <span class="bar top"></span>
                   <span class="bar middle"></span>
                   <span class="bar bottom"></span>
                   <span class="menu-btn__text">MENU</span>
               </label>
               <label class="close-menu" for="checked"></label>
               <nav class="drawer-menu">
                 <ul>
                     <li><?= anchor('about', 'ABOUT') ?></li>
                     <li><?= anchor('stage', 'STAGE') ?></li>
                     <li><?= anchor('gallery', 'GALLERY') ?></li>
                     <li><?= anchor('blog', 'BLOG') ?></li>
                     <li><?= anchor('contact', 'CONTACT') ?></li>
<!--                     <li><a href="" class="langEng">LANGUAGE JP<i class="fas fa-long-arrow-alt-right"></i>EN</a></li>-->
                 </ul>
            <div class="sns_sp">
                        <ul>
                         <li class="bg_green"><a href="https://twitter.com/miraikorai" target="_blank"><i class="fab fa-twitter fa-2x"></i></a></li>
                         <li class="bg_blue"><a href="https://www.facebook.com/miraikorai/" target="_blank"><i class="fab fa-facebook fa-2x"></i></a></li>
                         <li class="bg_red"><a href="https://www.youtube.com/channel/UCpZujNekSemJADXLgu4Zaqg?view_as=subscriber" target="_blank"><i class="fab fa-youtube fa-2x"></i></a></li>
                       </ul>

             </div>
             </nav>
             </div>
  </header>
</body>

