<?php

require './models/articleManager.php';

if (isset($_POST) && !empty($_POST)) {
  addArticle($_POST);
  header("Location: index.php?page=list_articles");
}

$title = "Ajouter un article";
$template = './views/pages/add_article.php';