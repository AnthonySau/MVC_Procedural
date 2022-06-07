<h1>Editer l'article</h1>

<form action="" method="POST">
  <label for="title">Titre de l'article</label>
  <input type="text" name="title" id="title" value="<?= htmlspecialchars($article['title']) ?>">

  <label for="resume">Résumé</label>
  <textarea name="resume" id="resume" rows="3"><?= htmlspecialchars($article['resume']) ?></textarea>

  <label for="content">Contenu</label>
  <textarea name="content" id="content" rows="10"><?= htmlspecialchars($article['content']) ?></textarea>

  <input type="submit" value="Editer">
</form>