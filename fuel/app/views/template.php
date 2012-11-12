<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><?php echo isset($title) ? $title : '' ?></title>
	<?php echo Asset::css( 'bootstrap.min.css' ) ?>

	<?php echo Asset::js( 'jquery.js' ) ?>
	<?php echo Asset::js( 'bootstrap.min.js' ) ?>
</head>
<body>
	<div class="container">
		<?php echo isset($content) ? $content : '' ?>
	</div>
</body>
</html>