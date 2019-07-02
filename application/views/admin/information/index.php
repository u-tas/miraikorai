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
                        <th width="20%">日付</th>
                        <th width="70%" class="list_title">タイトル</th>
                        <th width="10%" class="list_title"></th>
                    </tr>
                    <?php foreach ($information as $information_item): ?>
                    <tr class="list modal-open" data-target="detail_modal" onclick="getId(this);" value="<?=$information_item['id']?>">
                            <td><?= substr($information_item['publishment_date'], 5, 5)."-".substr($information_item['publishment_date'], 0, 4) ?></td>
                            <td class="list_title"><?=$information_item['title']?><?=$information_item['id']?></td>
                            <td><div class="detail_btn"><a href="<?= base_url("admin/informationDetail/".$information_item['id']) ?>" class="">詳細</a></div></td>
                    </tr>
                    <?php endforeach;?>
                </table>
                </div>
        </div><!--main_contets-->

    </div><!--wrapper-->
    
</body>

</html>
