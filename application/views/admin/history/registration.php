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
                <table summary="登録フォーム" id="form">
                    <tr>
                            <th></th>
                        </tr>
                        <tr>
                            <th>タイトル</th>
                            <td><input type="text" name="title" value="" class="textlines"/></td>
                        </tr>
                        <tr>
                            <th>日付</th>
                            <td>
                                <input id="form_date" type="date" name="date" value=""/>
                            </td>
                        </tr>
                    </table>
                    <div class="btn">
                        <input type="submit" value="送信する">
                    </div>
                </div>
        </div><!--main_contets-->

    </div><!--wrapper-->
</body>

</html>
