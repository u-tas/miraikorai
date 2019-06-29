

<?= link_tag("css/stage_style.css")?>

<body>
    <div class="wrapper">
        <header></header>

        <div class="main_contents">

            <div class="title_contents bg_blue">
                <h1 class="pege_title">STAGE</h1>
            </div>

            <div class="stage_title blue"><?= $stage[0]->title?></div>
            <div class="member_part_bottom">
             <div class="member_part_box_left bg_blue"></div>
             <div class="member_part_center bg_blue"></div>
             <div class="member_part_box_right bg_blue"></div>
            </div>
            <?php if (strtotime($stage[0]->open_date) <= strtotime(date("Y/m/d"))) 
            { echo '<p class="alert">この演奏会は終了いたしました</p>'; } ?>
            <div class="stage_contents">
            <div class="stage_photo"><img src="images/stage_images/stage_01.png" alt="演奏会チラシ"></div>

            <div class="stage_text">
            <p class="stage_text_overview"><?= $stage[0]->detail?>
            </p>
            <p class="stage_text_price sp_only"><span><?=$stage[0]->ticket_detail?></span></p>
            <div class="button sp_only"><?= anchor($stage[0]->book_url, "予約する")?></div>
<?php
foreach ($stages as $stages_one) { ?>
    
<div class="stage_text_main">
            <p class="stage_text_name blue"><?= $stages_one->title?></p>
            <div class="steag_title_bottom">
             <div class="member_part_center bg_blue"></div>
             <p><?= $stages_one->detail?></p>
            </div>
            <div class="stage_text_conductor">
            <?php if ($stages_one->conductor_name)
            { echo "<p><span>指揮</span> $stages_one->conductor_name</p>"; } ?> 
            <?php if ($stages_one->pianist_name)
            { echo "<p><span>ピアノ</span> $stages_one->pianist_name</p>"; } ?>
            </div>
    <?php foreach ($stages_one->array_song as $song) { ?>
            <p class="stage_text_music blue"><?=$song->title?></p>
            <div class="stage_text_author">
              <p><span>作詞</span><?=$song->lyric_by?></p>
              <p><span>作曲</span><?=$song->song_by?></p>
              <p><span>編曲</span><?=$song->arranged_by?></p>
            </div> <?php }?>

</div> <?php }?>
          <div class="stage_text_agenda">
              <p class="stage_text_date"><?=substr($stage[0]->open_date, 0, 4)."年"?><span><?=substr($stage[0]->open_date,5,2)?></span>月<span><?=substr($stage[0]->open_date,8,2)?></span>日(<?php $week = array( "日", "月", "火", "水", "木", "金", "土" ); echo $week[date("w", strtotime($stage[0]->open_date))]?>)</p>
          </div>
          <div class="stage_text_time">
            <p class="stage_text_date"><span>開場</span><?=substr($stage[0]->open_date, 11,5)?></p>
            <p class="stage_text_date"><span>開演</span><?=substr($stage[0]->start_date, 11,5)?></p>
          </div>
          <div class="stage_text_holl">
            <div class="stage_text_hollName"><?=$stage[0]->name?></div>
            <div class="stage_text_hollUrl"><?= anchor($stage[0]->official_url, "詳細")?></div>
          </div>
          <p class="stage_text_hollAcsses"><?=$stage[0]->access?></p>

          <p class="stage_text_other"><i class="fas fa-exclamation-triangle"></i><?=$stage[0]->attention?></p>
</div>
</div>
<p class="stage_text_price"><span><?=$stage[0]->ticket_detail?></span></p>
<div class="button"><?= anchor($stage[0]->book_url, "予約する")?></div>
<!--<div class="title_sub_contents">
    <h2 class="pege_title_sub blue">Back number</h2>
    <div class="title_sub_border_bottom bg_blue">
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
                 <a href="<?= base_url("blog/".$latest_post['id']) ?>">
               <figure>
                   <?= img("images/blog_images/".$latest_post['image_url']) ?>
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
       </div>-->
<!--        <div class="backnumber_moer">
                //<?= anchor("blog/list", "MORE") ?>
</div>-->
    </div>
<!--    <div class="button"><a href="#">過去の演奏動画はこちら</a></div>-->
        </div>
        <!--main_contets-->

        <div class="footer_bottom"></div>
    </div>
    <!--wrapper-->
</body>

</html>
