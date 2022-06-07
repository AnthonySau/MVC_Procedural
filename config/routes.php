<?php

const AVAILABLE_ROUTES = [
    'home' => 'homeController.php',
    'about' => 'aboutController.php',
		'contact' => 'contactController.php',
    'privacy_policy' => 'privacyPolicyController.php',
		'show_article' => 'showArticleController.php',
		'list_articles' => 'listArticlesController.php',
    'add_article' => 'addArticleController.php',
    'edit_article' => 'editArticleController.php',
    'delete_article' => 'deleteArticleController.php',
];

const DEFAULT_ROUTE = AVAILABLE_ROUTES['home'];