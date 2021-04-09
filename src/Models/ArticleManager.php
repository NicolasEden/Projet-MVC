<?php


namespace EdenNews\Models;


class ArticleManager
{
    private $bdd;

    public function __construct() {
        $this->bdd = new \PDO('mysql:host='.HOST.';dbname=' . DATABASE . ';charset=utf8;' , USER, PASSWORD);
        $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getBdd()
    {
        return $this->bdd;
    }
    public function all() {
        $stmt = $this->bdd->query(
            'SELECT posts.id, posts.views, posts.comments, posts.shares, posts.header, posts.content, posts.timestamp, posts.resume, posts.quote, file.name, file.image, file.thumb, user.firstname, category.color, category.category_name AS category FROM posts ' .
            'LEFT JOIN file ON posts.file_id = file.id ' .
            'LEFT JOIN user ON posts.user_id = user.id ' .
            'LEFT JOIN category ON posts.category_id = category.id ORDER BY posts.category_id DESC');
        $articles = [];
        $fetchs = $stmt->fetchAll(\PDO::FETCH_CLASS,"EdenNews\Models\Article");
        foreach ($fetchs as $fetch) {
            if (!isset($articles[$fetch->getCategory()])) $articles[$fetch->getCategory()] = [];
            array_push($articles[$fetch->getCategory()], $fetch);
        }
        return $articles;
    }
    public function mostViews() {
        $stmt = $this->bdd->query(
            'SELECT posts.id, posts.views, posts.comments, posts.shares, posts.header, posts.content, posts.timestamp, posts.resume, posts.quote, file.name, file.image, file.thumb, user.firstname, category.category_name FROM posts ' .
            'LEFT JOIN file ON posts.file_id = file.id ' .
            'LEFT JOIN user ON posts.user_id = user.id ' .
            'LEFT JOIN category ON posts.category_id = category.id ' .
            'ORDER BY posts.views DESC LIMIT 2 ');
        return $stmt->fetchAll(\PDO::FETCH_CLASS,"EdenNews\Models\Article");
    }
    public function last() {
        $stmt = $this->bdd->query(
            'SELECT posts.id, posts.views, posts.comments, posts.shares, posts.header, posts.content, posts.timestamp, posts.resume, posts.quote, file.name, file.image, file.thumb, user.firstname, category.category_name FROM posts ' .
            'LEFT JOIN file ON posts.file_id = file.id ' .
            'LEFT JOIN user ON posts.user_id = user.id ' .
            'LEFT JOIN category ON posts.category_id = category.id ' .
            'ORDER BY posts.timestamp ASC LIMIT 2 ');
        return $stmt->fetchAll(\PDO::FETCH_CLASS,"EdenNews\Models\Article");
    }
}