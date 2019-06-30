<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Affichage d'un article</title>
	<link rel="stylesheet" type="text/css" href="/design/style.css">
</head>
<body>
  <?php
  require_once 'inc/entete.php';
  ?>
	<div id="contenu">
		<div class="post">
      <h1><?= $article[0]['titre'] ?></h1>
  		<span>Publié le <?= $article[0]['date_de_creation'] ?></span>
  		<p><?= $article[0]['contenu'] ?></p>
    </div>
	</div>
	<?php
		require_once 'inc/menu.php';
	?>
</body>
</html>
