<head>
    <?= link_tag("css/gallery_style.css")?>
    <?= link_tag("css/jquery.fs.boxer.css")?>
    <?= link_tag("css/color.css")?>
    <script src="../../../js/jquery.fs.boxer.min.js" type="text/javascript"></script>
</head>

<body>
    <div class="wrapper">

        <div class="main_contents">

            <div class="title_contents bg_green">
                <h1 class="pege_title">GALLERY</h1>
            </div>

            <div class="title_sub_contents">
                <h2 class="pege_title_sub green">Movie</h2>
                <div class="title_sub_border_bottom bg_green">
                </div>
            </div>
            
                <div class="backnumber">
       <div class="backnumber_photo">
           <ul>
             <li><div class="video">
                 <a href="https://www.youtube.com/embed/dVlTmWQ8_Tw" class="boxer_sample" data-gallery="videos">
               <figure>
                   <img src="images/gallery_images/blog_1.png" />
                 <div class="overlay gradation_10"></div>
                 <figcaption class="gradation_10">
                   <h3>SEEMS LIKE OLD TIMES</h3>
                 </figcaption>
               </figure>
                      
                 </a></div> 
                 </li>
                 <li>
                 <a href="https://www.youtube.com/embed/37jD6oLoQ_8" class="boxer_sample" data-gallery="videos">
               <figure>
                   <img src="images/gallery_images/blog_1.png" />
                 <div class="overlay gradation_11"></div>
                 <figcaption class="gradation_11">
                   <h3>THE STARS AND STRIPES FOREVER</h3>
                 </figcaption>
               </figure>
                 </a>
                 </li>
                 
           </ul>
       </div>
       <script type="text/javascript">
                jQuery(".boxer_sample").boxer();
       </script>

      </div>  
      </div>
        <!--main_contets-->

    </div>
    <!--wrapper-->
</body>
