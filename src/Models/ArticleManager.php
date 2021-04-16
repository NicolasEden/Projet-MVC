<?php


namespace EdenNews\Models;


class ArticleManager
{
    private $bdd;

    public function __construct() { // Création  de l'objet avec la base de donnée
        $this->bdd = new \PDO('mysql:host='.HOST.';dbname=' . DATABASE . ';charset=utf8;' , USER, PASSWORD);
        $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getBdd() // permet de récupérér la base de données
    {
        return $this->bdd;
    }
    public function all() {// Récupère l'intégralité des articles (Limite de 25)
        $stmt = $this->bdd->query(
            'SELECT posts.id, posts.views, posts.comments, posts.shares, posts.header, posts.content, posts.timestamp, posts.resume, posts.quote, file.name, file.image, file.thumb, user.firstname, user.lastname, category.color, category.category_name AS category FROM posts ' .
            'LEFT JOIN file ON posts.file_id = file.id ' .
            'LEFT JOIN user ON posts.user_id = user.id ' .
            'LEFT JOIN category ON posts.category_id = category.id ORDER BY posts.category_id DESC LIMIT 25');
        $articles = [];
        $fetchs = $stmt->fetchAll(\PDO::FETCH_CLASS,"EdenNews\Models\Article");
        foreach ($fetchs as $fetch) { // Définit un tableau de catégories avec chaque article & Mets en place l'information sur le nom et prénom ainsi que la date
            if (!isset($articles[$fetch->getCategory()])) $articles[$fetch->getCategory()] = [];
            array_push($articles[$fetch->getCategory()], $fetch);
            $fetch->setName($fetch->getFirstname()." ".$fetch->getLastname());
            $fetch->setDate(date("H:i, j F", strtotime($fetch->getTimestamp())));
        }
        return $articles;
    }
    public function mostViews() { // Récupère les deux articles les plus vues
        $stmt = $this->bdd->query(
            'SELECT posts.id, posts.views, posts.comments, posts.shares, posts.header, posts.content, posts.timestamp, posts.resume, posts.quote, file.name, file.image, file.thumb, user.firstname, user.lastname, category.category_name FROM posts ' .
            'LEFT JOIN file ON posts.file_id = file.id ' .
            'LEFT JOIN user ON posts.user_id = user.id ' .
            'LEFT JOIN category ON posts.category_id = category.id ' .
            'ORDER BY posts.views DESC LIMIT 2 ');
        $fetchs = $stmt->fetchAll(\PDO::FETCH_CLASS,"EdenNews\Models\Article");
        foreach ($fetchs as $fetch) { // Mets en place l'information sur le nom et prénom ainsi que la date
            $fetch->setName($fetch->getFirstname()." ".$fetch->getLastname());
            $fetch->setDate(date("H:i, j F", strtotime($fetch->getTimestamp())));
        }
        return $fetchs;
    }
    public function last() { // Récupère le dernier article
        $stmt = $this->bdd->query(
            'SELECT posts.id, posts.views, posts.comments, posts.shares, posts.header, posts.content, posts.timestamp, posts.resume, posts.quote, file.name, file.image, file.thumb, user.firstname, user.lastname, category.category_name FROM posts ' .
            'LEFT JOIN file ON posts.file_id = file.id ' .
            'LEFT JOIN user ON posts.user_id = user.id ' .
            'LEFT JOIN category ON posts.category_id = category.id ' .
            'ORDER BY posts.timestamp ASC LIMIT 2 ');
        $fetchs = $stmt->fetchAll(\PDO::FETCH_CLASS,"EdenNews\Models\Article");
        foreach ($fetchs as $fetch) { // Mets en place l'information sur le nom et prénom ainsi que la date
            $fetch->setName($fetch->getFirstname()." ".$fetch->getLastname());
            $fetch->setDate(date("H:i, j F", strtotime($fetch->getTimestamp())));
        }
        return $fetchs;
    }
    public function getArticle($id) { // Récupère un article en particulier
        $stmt = $this->bdd->query(
            'SELECT posts.id, posts.views, posts.comments, posts.shares, posts.header, posts.content, posts.timestamp, posts.resume, posts.quote, file.name, file.image, file.thumb, user.firstname, user.lastname, category.category_name FROM posts ' .
            'LEFT JOIN file ON posts.file_id = file.id ' .
            'LEFT JOIN user ON posts.user_id = user.id ' .
            'LEFT JOIN category ON posts.category_id = category.id ' .
            'WHERE posts.id = "'.$id.'"'); // Faille de sécurité à corriger plus tard
        $fetchs = $stmt->fetchAll(\PDO::FETCH_CLASS,"EdenNews\Models\Article");
        foreach ($fetchs as $fetch) { // Mets en place l'information sur le nom et prénom ainsi que la date
            $fetch->setName($fetch->getFirstname()." ".$fetch->getLastname());
            $fetch->setDate(date("H:i, j F", strtotime($fetch->getTimestamp())));
        }
        $fetchs = $fetchs[0];
        return $fetchs;
    }
}