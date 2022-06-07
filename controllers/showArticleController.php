<?php

require './models/articleManager.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
  $article = getArticle($_GET['id']);
  $title = $article['title'];
  $template = './views/pages/show_article.php';
} else {
  header("Location: index.php?page=home");
}