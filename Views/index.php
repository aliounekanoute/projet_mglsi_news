<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actualités MGLSI</title>
	<link rel="stylesheet" type="text/css" href="/design/style.css">
</head>
<body>
	<?php require_once 'inc/entete.php'; ?>
	<div id="contenu">
		<?php
			if (sizeof($lastArticle ) != 0)
			{
				foreach ($lastArticle as $article)
				{?>
					<div class="article">
						<h1><a href="/post/<?= $article['id'] ?>"><?= $article['titre'] ?></a></h1>
						<p><?= substr($article['contenu'], 0, 300) . '...' ?></p>
					</div><?php
				}
			}
			else
			{
				echo "Aucun article trouvé";
			}
		?>
	</div>
	<?php
		require_once 'inc/menu.php';
	?>
</body>
</html>
