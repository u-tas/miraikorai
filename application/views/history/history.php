<!DOCTYPE html>

<head>
    
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@miraikorai" />
    <meta property="og:url" content="https://miraikorai.com/blog" />
    <meta property="og:title" content="仮" />
    <meta property="og:description" content="仮" />
    <meta property="og:image" content="../../images/logo_main.png" />
    
    
    
    
    
    
    <?= link_tag("css/about_style.css")?>
    
</head>

<body>
    <div class="wrapper">
        
        <div class="main_contents">
            
         <div class="title_contents bg_yellow">
            <h1 class="pege_title">HISTORY</h1>
         </div>
            
            <div class="about_history">
                <div class="about_history_tree">
                    <div class="box_top"></div>
                    <div class="box_bottom"></div>
                </div>
                <div class="about_history_main">
 
                    <?php $year = '';?>
                    <?php foreach ($history as $history_item) : ?>
                        <?php if (strcmp($year, substr($history_item['publishment_date'], 0, 4))) : ?>
                            <div class="about_history_year">
                                <p><?=substr($history_item['publishment_date'], 0, 4)?></p>
                            </div>
                        <?php endif;?>
                        <div class="about_history_event">
                            <ul>
                                <li class="event_title"><?=$history_item['title']?></li>
                                <li class="event_date"><?=str_replace("-", ".", substr($history_item['publishment_date'], 5, 5))?></li>
                            </ul>
<!--                        <div class="event_text"></div>-->
                    </div>
                    <?php
                        $year = substr($history_item['publishment_date'], 0, 4); 
                        endforeach; ?>
                </div>

            
            
            
            

<!--        <div class="backnumber_moer">
                //<?= anchor("blog/list", "MORE") ?>
</div>-->
    </div>
        </div>
        <!--main_contets-->
    </div>
    <!--wrapper-->
</body>

</html>
