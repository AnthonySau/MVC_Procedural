<?php

require_once './models/connection.php';

// ===== LECTURE ===== //

// Retourne la liste des articles
function getArticles(): array {
  $sql = "SELECT * FROM articles ORDER BY created_at DESC";
  $query = dbConnect()->query($sql);
  $articles = $query->fetchAll();
  $query->closeCursor();
  return $articles;
}

// Retourne la liste des X derniers articles


// Retourne un article spécifique
function getArticle(int $id): array {
  $sql = "SELECT * FROM articles WHERE id = :id";
  $query = dbConnect()->prepare($sql);
  $query->execute([
    'id' => $id
  ]);
  $article = $query->fetch();
  $query->closeCursor();
  return $article;
}

// ===== ECRITURE ===== //

// Ajoute un nouvel article en BDD
function addArticle(array $fields): void {
  $sql = "INSERT INTO articles (title, resume, content, created_at) VALUES (:title, :resume, :content, :created_at)";
  $query = dbConnect()->prepare($sql);
  $query->execute([
    'title' => $fields['title'],
    'resume' => $fields['resume'],
    'content' => $fields['content'],
    'created_at' => date_format(new DateTime('NOW'), 'Y-m-d H:i:s')
  ]);
}

// Supprime un article en BDD
function deleteArticle(int $id): void {
  $sql = "DELETE FROM articles WHERE id = :id";
  $query = dbConnect()->prepare($sql);
  $query->execute([
    'id' => $id
  ]);
}

// Edite un article en BDD
function editArticle(int $id, array $fields): void {
  $sql = "UPDATE articles SET title = :title, resume = :resume, content = :content WHERE id = :id";
  $query = dbConnect()->prepare($sql);
  $query->execute([
    'title' => $fields['title'],
    'resume' => $fields['resume'],
    'content' => $fields['content'],
    'id' => $id
  ]);
}