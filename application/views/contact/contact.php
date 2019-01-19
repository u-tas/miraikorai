<head>
    <?= link_tag("css/contact_style.css")?>
</head>

<body>
    <div class="wrapper">
		<div class="loading"></div>
		<header></header>
			<div class="main_contents">

				<div class="title_contents bg_navy">
						<h1 class="pege_title">CONTACT</h1>
				</div>
                      
                            
        <?php echo form_open('contact'); ?>
<div id="form-tbl">
<table summary="問合せフォーム" id="form">
    <tr>
	<th></th>
	<td><div class="validation red"><?php echo validation_errors(); ?></div></td>
</tr>

<tr>
	<th>お名前</th>
	<td><input type="text" name="username" value="<?php echo set_value('username'); ?>" class="textlines"/></td>
</tr><tr>
	<th>メールアドレス</th>
	<td>
		<input type="text" name="email" value="<?php echo set_value('email'); ?>"/><br>
		<p class="form_comment">確認の為、再度ご入力ください。</p>
		<input type="text" name="email2" value="<?php echo set_value('email2'); ?>">
	</td>
</tr>
<tr>
	<th>お問合せ種別</th>
	<td class="button-radio">
		<input id="bar1" type="radio" name="問合せ種別" value="ご相談" checked>
		<label for="bar1">ご相談</label>
		<input id="bar2" type="radio" name="問合せ種別" value="ご質問">
		<label for="bar2">ご質問</label>
		<input id="bar3" type="radio" name="問合せ種別" value="その他">
		<label for="bar3">その他</label>
</tr>
<tr>
	<th>お問合せ内容</th>
	<td>
<textarea name="text" type="text" class="textlines_03"　wrap="soft" value="<?php echo set_value('text'); ?>"></textarea>
　　　　<p class="form_comment_02">ご記入いただいた個人情報は、お問い合わせへの対応および確認のためのみに利用します。</p>
	</td>
</tr>
</table>

<div class="btn">
	  <input type="submit" value="送信する">
</p>
</form>
</div>
</div>

        </div><!--main_contets-->
        
       
        
        
        
    </div><!--wrapper-->
</body>
