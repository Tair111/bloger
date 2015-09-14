<!Docpype html>
<html>
<head>
<title>Главная страница сайта</title>
<meta charset="UTF-8">

</head>
<body>
	<?php foreach ($news as $article); ?>
	<article>
		<h1><?=$article['title']; ?></h1>
		<div><?=$article['text']; ?></div>
	</article>


</body>
</html>