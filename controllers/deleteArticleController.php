<?php

require './models/articleManager.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
  deleteArticle($_GET['id']);
  header("Location: index.php?page=list_articles");
} else {
  header("Location: index.php?page=home");
}