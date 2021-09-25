<head>
    <?= link_tag("css/list.css")?>
    <?= link_tag("css/color_style.css")?>

    <script src="<?= base_url("js/list.js")?>"></script>
</head>

<body>
    <div class="wrapper">

        <div class="main_contents">

          <div class="title_contents bg_red">
              <h1 class="pege_title">STAGE</h1>
          </div>
          <ul class="blog_list">
            <?php $css_class = array
                ( 0 => 'gradation_6',
                 1 => 'gradation_7',
                 2 => 'gradation_8',
                 3 => 'gradation_9',
                 4 => 'gradation_10',
                 5 => 'gradation_11',
                 6 => 'gradation_12',
                 7 => 'gradation_13',
                 8 => 'gradation_14',
                 9 => 'gradation_15',
                 10 => 'gradation_16',
                 11 => 'gradation_1',
                 12 => 'gradation_2',
                 13 => 'gradation_3',
                 14 => 'gradation_4',
                 15 => 'gradation_5'
                ); 
            ?>
              <?php $count = 0;?>
              <?php foreach ($stage_list as $stage) :?>
                <li>
                  <a href="<?= base_url("stage/".str_replace('stage-', '', $stage['id'])) ?>"> <!--index.php-->
                <div class="blog_cap">
                    <div class="blog_title"><?=$stage['title']?></div>
                    <div class="member_part_bottom">
                     <div class="member_part_box_left <?=$css_class[$count%count($css_class)]?>"></div>
                     <div class="member_part_center <?=$css_class[$count%count($css_class)]?>"></div>
                     <div class="member_part_box_right <?=$css_class[$count%count($css_class)]?>"></div>
                    </div>
                    <p class="blog_date"><?= substr($stage['open_date'], 0, 10) ?></p>
                </div>
                <div class="box_main gradation_1">
                <div class="blog_image">
                    <div class="overlay <?=$css_class[$count%count($css_class)]?>"></div>
                    <?= img($stage['image_url']['url'])?>
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
