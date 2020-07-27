<!doctype html>
<html lang='ja'>

<head>
	<meta charset='utf-8'>
	<title>リストタグ</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="/js/jquery-3.5.1.min.js"></script>
	<script src="/js/include.js"></script>
</head>

<body>
	<script>include("/include/header.html"); </script>


	<h1>リスト挿入</h1>

	<main>
		<div class="input"><textarea placeholder="リストにしたいテキストを入れてください。"></textarea></div>
		<ul>
			<li class="change">作成</li>
			<li class="reset">リセット</li>
		</ul>
		<div class="output"><textarea></textarea></div>
	</main>

	<script>
		$('.output textarea').on('focus', function () {
			$(this).select();
		});
		$('.reset').on('click', function () {
			$('.input textarea').val('');
			$('.output textarea').val('');
		});

		$('.change').on('click', function () {
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