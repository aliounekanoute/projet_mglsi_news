<div id="menu">
	<h1>Catégories</h1><hr width="20%">
	<ul>
		<li><a href="/index">Tout</a></li>
		<?php foreach ($categories as $categorie): ?>
			<li><a href="/article/<?= $categorie['id'] ?>"><?= $categorie['nom'] ?></a></li>
		<?php endforeach ?>
	</ul>
</div>
