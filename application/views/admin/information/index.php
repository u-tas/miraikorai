<head>
    <?= link_tag("css/top_style.css")?>
</head>
<script>    
$(function(){
    // 「.modal-open」をクリック
    $('.modal-open').click(function(){
        // オーバーレイ用の要素を追加
        $('body').append('<div class="modal-overlay"></div>');
        // オーバーレイをフェードイン
        $('.modal-overlay').fadeIn('slow');
        // モーダルコンテンツのIDを取得
        var modal = '.' + $(this).attr('data-target');
        // モーダルコンテンツの表示位置を設定
        modalResize();
         // モーダルコンテンツフェードイン
        $(modal).fadeIn('slow');
        // 「.modal-overlay」あるいは「.modal-close」をクリック
        $('.modal-overlay, .modal-close').off().click(function(){
            // モーダルコンテンツとオーバーレイをフェードアウト
            $(modal).fadeOut('slow');
            $('.modal-overlay').fadeOut('slow',function(){
                // オーバーレイを削除
                $('.modal-overlay').remove();
            });
        });
        // リサイズしたら表示位置を再取得
        $(window).on('resize', function(){
            modalResize();
        });
 
        // モーダルコンテンツの表示位置を設定する関数
        function modalResize(){
            // ウィンドウの横幅、高さを取得
            var w = $(window).width();
            var h = $(window).height();

            // モーダルコンテンツの表示位置を取得
            var x = (w - $(modal).outerWidth(true)) / 2;
            var y = (h - $(modal).outerHeight(true)) / 2;
 
            // モーダルコンテンツの表示位置を設定
            $(modal).css({'left': x + 'px','top': y + 'px'});
        }
    });
});
</script>

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
                        <th width="80%" class="list_title">タイトル</th>
                    </tr>
                    <?php foreach ($information as $information_item): ?>
                    <tr class="list modal-open" data-target="detail_modal">
                            <td><?= substr($information_item['publishment_date'], 5, 5)."-".substr($information_item['publishment_date'], 0, 4) ?></td>
                            <td class="list_title"><?=$information_item['title']?><?=$information_item['id']?></td>
                    </tr>
                    <?php endforeach;?>
                </table>
            
                <!--モーダルで表示される内容-->
                <div id="" class="modal-content detail_modal">
                
                    <h2 class="pege_title_sub navy">詳細情報 INFORMATION</h2>
                    <div class="title_sub_border_bottom bg_navy"></div>
                    
                    <div class="detail_list">
                    <h3 class="bg_red">日本語</h3>
                    <table class="table_detail table_detail_ja">
                    <tr>
                        <th>タイトル</th>
                        <td>
                            <?=$information_item['title']?>
                        </td>
                    </tr>
                    <tr>
                        <th>日付</th>
                        <td>
                            <?= substr($information_item['publishment_date'], 5, 5)."-".substr($information_item['publishment_date'], 0, 4) ?>
                        </td>
                    </tr>
                    </table>
                    <h3 class="bg_green">English</h3>
                    <table class="table_detail table_detail_eng">
                    <tr>
                        <th>title</th>
                        <td>
                            <?=$information_item['title']?>
                        </td>
                    </tr>
                    <tr>
                        <th>date</th>
                        <td>
                            <?= substr($information_item['publishment_date'], 5, 5)."-".substr($information_item['publishment_date'], 0, 4) ?>
                        </td>
                    </tr>
                    </table>
                    </div>
                    
                    <div class="button"><?= anchor('admin/informationCange', '変更する') ?></div>
                    <p><a class="modal-close"><i class="fas fa-times"></i></a></p>

                </div>
        </div><!--main_contets-->

    </div><!--wrapper-->
    
</body>

</html>
