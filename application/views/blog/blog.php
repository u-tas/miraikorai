<!DOCTYPE html>

<head>
    <?= link_tag("css/blog_style.css")?>
</head>

<body>
    <div class="wrapper">
        
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
            <p class="blog_date yellow"><?= substr($article[0]['publishment_date'], 5, 5)."-".substr($article[0]['publishment_date'], 0, 4)?></p>

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
    <h2 class="pege_title_sub yellow">Latest posts</h2>
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
                 <a href="<?= base_url("blog/".$latest_post['id']) ?>"> <!--index.php-->
               <figure>
                   <?= img("img/blog/".$latest_post['image_url']) ?>
                 <div class="<?= "overlay ".$css_class[$count%count($css_class)]?>"></div>
                 <figcaption class="<?= $css_class[$count%count($css_class)]?>">
                   <h3><?=$latest_post['title'] ?></h3>
                   <p><?=substr($latest_post['publishment_date'], 5, 5)."-".substr($latest_post['publishment_date'], 0, 4) ?></p>
                 </figcaption>
               </figure>
                 </a>
                 </li>
                <?php $count++; endforeach;?>
           </ul>
       </div>
        <div class="backnumber_moer"><?= anchor("blog/list", "MORE") ?></div>
    </div>
        </div>
        <!--main_contets-->
    </div>
    <!--wrapper-->
</body>

</html>
