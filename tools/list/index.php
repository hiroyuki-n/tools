<!doctype html>
<html lang='ja'>

<head>
	<?php
	$title = 'リスト挿入ツール';
	$description = 'リスト挿入ツール　ディスクリプション';
	?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/head.php'); ?>
</head>

<body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/include/header.php'); ?>

	<main>
		<div class="input"><textarea placeholder="リストにしたいテキストを入れてください。"></textarea></div>
		<ul>
			<li><button class="change btn_b">作成</button></li>
			<li><button class="reset btn_w">リセット</button></li>
		</ul>
		<div class="output"><textarea></textarea></div>
	</main>

	<script>
		$('.output textarea').on('focus', function() {
			$(this).select();
		});
		$('.reset').on('click', function() {
			$('.input textarea').val('');
			$('.output textarea').val('');
		});

		$('.change').on('click', function() {
			const array = $('.input textarea').val().split('\n');
			let txt = '';
			for (i = 0; i < array.length; i++) {
				txt = txt + ' <li><a href="#">' + array[i] + '</a></li>\n';
			}
			$('.output textarea').val('<ul>\n' + txt + '</ul>\n');
		});
	</script>
</body>

</html>