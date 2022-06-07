<?php

require './models/articleManager.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
  $article = getArticle($_GET['id']);
  $title = $article['title'] . "(éditer)";
  $template = './views/pages/edit_article.php';
  if (
    isset($_POST['title'], $_POST['resume'], $_POST['content'])
    && !empty($_POST['title'])
    && !empty($_POST['resume'])
    && !empty($_POST['content'])
  ) {
    editArticle($_GET['id'], $_POST);
    header("Location: index.php?page=show_article&id=" . $_GET['id']);
  }
} else {
  header("Location: index.php?page=home");
}