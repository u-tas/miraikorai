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
    <link rel="stylesheet" href="css/list.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!--web icon-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <script src="js/jquery.min.js"></script>
    <script src="js/list.js"></script>
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

          <div class="title_contents bg_red">
              <h1 class="pege_title">BLOG</h1>
          </div>
          <ul class="blog_list">
              <?php foreach ($articles as $article) :?>
                <li>
                  <a href="<?= base_url("index.php/blog/".$article['id']) ?>"> <!--index.php-->
                <div class="blog_cap">
                    <div class="blog_title"><?=$article['title']?></div>
                    <div class="member_part_bottom">
                     <div class="member_part_box_left bg_red"></div>
                     <div class="member_part_center bg_red"></div>
                     <div class="member_part_box_right bg_red"></div>
                    </div>
                    <p class="blog_date"><?= substr($article['publishment_date'], 0, 10) ?></p>
                </div>
                <div class="box_main gradation_1">
                <div class="blog_image">
                    <div class="overlay bg_red"></div>
                    <?= img("img/blog/".$article['image_url'])?>
                </div>
                </div>
              </a>
                </li>
             <?php endforeach;?>
            </ul>
        </div>
        <!--main_contets-->

        <div class="footer_bottom"></div>
    </div>
    <!--wrapper-->
</body>

</html>
