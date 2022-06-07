<h1><?= htmlspecialchars($article['title']) ?></h1>
<p><?= htmlspecialchars($article['content']) ?></p>
<a role="button" href="index.php?page=edit_article&id=<?= $article['id'] ?>">
<i class="fa-solid fa-pen-to-square"></i> Editer</a>
<a role="button" class="secondary" href="index.php?page=delete_article&id=<?= $article['id'] ?>">
<i class="fa-solid fa-trash"></i> Supprimer</a>