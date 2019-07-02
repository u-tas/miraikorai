<head>
    <?= link_tag("css/style.css")?>
    <?= link_tag("css/color_style.css")?>
    <?= link_tag("css/admin_style.css")?>
</head>
<body>
    <div class="wrapper">
        <div class="main_contents">
            <div class="title_contents bg_navy">
                <h1 class="pege_title">INFORMATION</h1>
            </div>
                <div id="" class="detail-content">
                    <h2 class="pege_title_sub navy">詳細情報</h2>
                    <div class="title_sub_border_bottom bg_navy"></div>
                    <div class="detail_list">
                    <h3 class="bg_red">日本語</h3>
                    <table class="table_detail table_detail_ja">
                    <tr>
                        <th>タイトル</th>
                        <td>
                            aaa
                        </td>
                    </tr>
                    <tr>
                        <th>日付</th>
                        <td>
                           aaa
                        </td>
                    </tr>
                    </table>
                    <h3 class="bg_green">ENGLISH</h3>
                    <table class="table_detail table_detail_eng">
                    <tr>
                        <th>TITLE</th>
                        <td>
                            sss
                        </td>
                    </tr>
                    <tr>
                        <th>DATE</th>
                        <td>
                            sss
                        </td>
                    </tr>
                    </table>
                    </div>
                    
                    <div class="button"><?= anchor('admin/informationCange', '変更する') ?></div>

                </div>
        </div><!--main_contets-->

    </div><!--wrapper-->
    
</body>

</html>
