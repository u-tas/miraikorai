<head>
    <?= link_tag("css/list.css")?>
    <script src="<?= base_url("js/jquery.min.js")?>"></script>
</head>

<body>
    <div class="wrapper">

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
    </div>
    <!--wrapper-->
</body>

</html>
