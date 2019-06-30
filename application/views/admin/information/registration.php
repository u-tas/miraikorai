<head>
    <?= link_tag("css/top_style.css")?>
    <?= link_tag("css/contact_style.css")?>
</head>

<body>
    <div class="wrapper">

        <div class="main_contents">
            <div class="title_contents bg_navy">
                <h1 class="pege_title">INFORMATION</h1>
            </div>
            
            <div id="form-tbl">
                <?= $result ?>
                <?php echo form_open('admin/InformationRegistration'); ?>
                <h2 class="pege_title_sub red">日本語</h2>
                <div class="title_sub_border_bottom bg_red"></div>
                <table summary="登録フォーム" id="form">
                    <tr>
                        <th>タイトル</th>
                        <td>
                            <input type="text" name="title_jp" value="" class="textlines input_ja"/>                               
                        </td>
                    </tr>
                    <tr>
                        <th>公開日付</th>
                        <td>
                            <input id="form_date" type="date" name="publishment_date" value="" class="input_ja"/>
                        </td>
                    </tr>
                    </table>
                <h2 class="pege_title_sub green">English</h2>
                <div class="title_sub_border_bottom bg_green"></div>
                <table summary="登録フォーム" id="form">
                    <tr>
                        <th>Title</th>
                        <td>
                            <input type="text" name="title_en" value="" class="textlines input_eng"/>
                            <p class="copy_btn">日本語をコピーする</p>
                            
                        </td>
                        </td>
                    </tr>
                </table>
                <input type="hidden" name="registration" value="on"/>
                <div class="btn">
                    <input type="submit" value="送信する">
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div><!--main_contets-->

    </div><!--wrapper-->
</body>

</html>
