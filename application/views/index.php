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
    <link rel="stylesheet" href="css/top_style.css" />
    <script src="js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--web icon-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <script type="text/javascript">
        $(function(){
            $(".loading").load("../loading.html");
            $("header").load("../header.html");
            $(".footer_bottom").load("../footer.html");
        })
    </script>
</head>

<body>
    <div class="wrapper">
      <div class="loading"></div>
      <header></header>

        <div class="header_logo_main"><img src="images/logo_main.png" alt="未来コライロゴ"></div>
        <div class="main_top">
                <p>Barbershop Quartet</p>
                <h1>未来コライ</h1>
            <div class="main_top_img">
                <img src="images/main_images/main_imags_01.png" alt="メインイメージ">
            </div>
        </div>
        <div class="main_contents">
            <div class="top_info">
                <h2>INFORMATION</h2>
                <div class="border"></div>
                <table>
                    <?php foreach ($information as $information_item): ?>
                    <tr>
                        <td class="top_info_date"><?= substr($information_item['publishment_date'], 0, 10) ?></td>
                        <td class="top_info_mark pc_only">◆</td>
                        <td class="top_info_text hover_yellow"><?=$information_item['title']?>
                        <?=$information_item['detail']?></td>
                    </tr>
                    <?php endforeach;?>
                </table>

                <div class="top_info_text_moer"><a href="#">MORE</a></div>
            </div>
            <div class="pc_only">
              <div class="sns">
              <ul>
                  <li class="hover_bg_green"><a href="https://twitter.com/miraikorai" target="_blank"><i class="fab fa-twitter fa-2x"></i><br>Twitter</a></li>
                  <li class="hover_bg_blue"><a href="https://www.facebook.com/miraikorai/" target="_blank"><i class="fab fa-facebook fa-2x"></i><br>Facebook</a></li>
                  <li class="hover_bg_red"><a href="https://www.youtube.com/channel/UCpZujNekSemJADXLgu4Zaqg?view_as=subscriber" target="_blank"><i class="fab fa-youtube fa-2x"></i><br>YouTube</a></li>
              </ul>
            </div>
            </div>
        </div><!--main_contets-->



<div class="footer_bottom">

</div>
    </div><!--wrapper-->
</body>

</html>
