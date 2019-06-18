<head>
    <?= link_tag("css/top_style.css")?>
</head>

<body>
    <div class="wrapper">

        <div class="main_contents">
            <div class="title_contents bg_navy">
                <h1 class="pege_title">INFORMATION</h1>
            </div>
            <div class="button"><?= anchor('admin/informationRegistration', '新規入力する') ?></div>
                <table class="list">
                    <tr>
                        <th width="5%"></th>
                        <th width="15%">日付</th>
                        <th width="75%" class="list_title">タイトル</th>
                        <th width="5%"></th>
                    </tr>
                    <?php foreach ($information as $information_item): ?>
                    <tr class="list">
                        <td class="list_menu"><i class="fas fa-exchange-alt"></i></i>
                        </td>
                        <td><?= substr($information_item['publishment_date'], 5, 5)."-".substr($information_item['publishment_date'], 0, 4) ?></td>
                        <td class="list_title"><?=$information_item['title']?></td>
                        <td class="list_title"><i class="fas fa-trash-alt"></i></td>
                    </tr>
                    <?php endforeach;?>
                </table>
        </div><!--main_contets-->

    </div><!--wrapper-->
</body>

</html>
