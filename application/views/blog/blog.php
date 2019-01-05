<!DOCTYPE html>

<html lang="ja">

<head>

    <title>未来コライ|miraikorai</title>


    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="未来コライは、混声のバーバーショップを歌うカルテットグループです。">
    <meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="format-detection" content="telephone=no" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/color_style.css" />
    <link rel="stylesheet" href="css/header_footer.css" />
    <link rel="stylesheet" href="css/blog_style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!--web icon-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $("header").load("./header.html");
            $(".footer_bottom").load("./footer.html");
        })
    </script>
</head>

<body>
    <div class="wrapper">
        <header></header>

        <div class="main_contents">

            <div class="title_contents bg_yellow">
                <h1 class="pege_title">BLOG</h1>
            </div>
            <div class="blog_title yellow"><?=$article[0]['title']?></div>
            <div class="member_part_bottom">
             <div class="member_part_box_left bg_yellow"></div>
             <div class="member_part_center bg_yellow"></div>
             <div class="member_part_box_right bg_yellow"></div>
            </div>
            <p class="blog_date yellow"><?=$article[0]['publishment_date']?></p>

            <div class="blog_main">
                <div class="blog_mainPhoto"><?= img("img/blog/".$article[0]['image_url']) ?></div>

              <div class="blog_text">
                  <?=$article[0]['content'] ?>
                  <!--<?php
                      for ($count = 1; $count <= count($article)-1; $count++) {
                          echo img("img/blog/".$article[$count]['image_url']);
                  }?>-->
             </div>
            </div>

<div class="title_sub_contents">
    <h2 class="pege_title_sub yellow">Back number</h2>
    <div class="title_sub_border_bottom bg_yellow">
    </div>
</div>
    <div class="backnumber">
       <div class="backnumber_photo">
           <?php $css_class = array
                   ( 0 => 'bg_red',
                    1 => 'bg_blue',
                    2 => 'bg_green',
                    3 => 'bg_yellow'); 
            ?>
           <ul>
               <?php $count = 0;?>
               <?php foreach ($latest_posts as $latest_post) :?>
             <li>
                 <a href="<?= base_url("index.php/blog/".$latest_post['id']) ?>"> <!--index.php-->
               <figure>
                   <?= img("img/blog/".$latest_post['image_url']) ?>
                 <div class="<?= "overlay ".$css_class[$count%count($css_class)]?>"></div>
                 <figcaption class="<?= $css_class[$count%count($css_class)]?>">
                   <h3><?=$latest_post['title'] ?></h3>
                   <p><?=$latest_post['publishment_date'] ?></p>
                 </figcaption>
               </figure>
                 </a>
                 </li>
                <?php $count++; endforeach;?>
           </ul>
       </div>
        <div class="backnumber_moer"><?= anchor("blog/", "MORE") ?></div>
    </div>
        </div>
        <!--main_contets-->

        <div class="footer_bottom"></div>
    </div>
    <!--wrapper-->
</body>

</html>
