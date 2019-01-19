<head>
    <?= link_tag("css/list.css")?>

    <script src="<?= base_url("js/list.js")?>"></script>
</head>

<body>
    <div class="wrapper">

        <div class="main_contents">

          <div class="title_contents bg_red">
              <h1 class="pege_title">BLOG</h1>
          </div>
          <ul class="blog_list">
            <?php $css_class = array
                ( 0 => 'bg_red',
                 1 => 'bg_blue',
                 2 => 'bg_green',
                 3 => 'bg_yellow'); 
            ?>
              <?php $count = 0;?>
              <?php foreach ($articles as $article) :?>
                <li>
                  <a href="<?= base_url("blog/".$article['id']) ?>"> <!--index.php-->
                <div class="blog_cap">
                    <div class="blog_title"><?=$article['title']?></div>
                    <div class="member_part_bottom">
                     <div class="member_part_box_left <?=$css_class[$count%count($css_class)]?>"></div>
                     <div class="member_part_center <?=$css_class[$count%count($css_class)]?>"></div>
                     <div class="member_part_box_right <?=$css_class[$count%count($css_class)]?>"></div>
                    </div>
                    <p class="blog_date"><?= substr($article['publishment_date'], 0, 10) ?></p>
                </div>
                <div class="box_main gradation_1">
                <div class="blog_image">
                    <div class="overlay <?=$css_class[$count%count($css_class)]?>"></div>
                    <?= img("images/blog_images/".$article['image_url'])?>
                </div>
                </div>
              </a>
                </li>
             <?php $count++; endforeach;?>
            </ul>
        </div>
        <!--main_contets-->
    </div>
    <!--wrapper-->
</body>

</html>
