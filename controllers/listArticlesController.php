<?php

require './models/articleManager.php';

$title = "Le blog";
$template = './views/pages/list_articles.php';
$articles = getArticles();