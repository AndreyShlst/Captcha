<?php require "inc/checking.inc.php";?>
<!DOCTYPE HTML>
<html>
<head>
	<link href="css/style_index.css" rel="stylesheet">
	<meta charset="utf-8" />
	<title>Чтобы увидеть танцующего робота - введите капчу:)</title>
</head>

<body>
	<h3>Чтобы увидеть танцующего робота - введите капчу:)</h3>
	<form action="" method="post">
		<div id="captcha">
			<div><img src="noise-picture.php"></div>
			<div><input type="text" name="answer" size="29"></div>
			<input type="submit" value="Подтвердить">
		</div>
	</form>
	<div id="errorMsg"> <?=$output;?> </div>
</body>
</html>