<?php


namespace EdenNews\Controllers;


use EdenNews\Models\ArticleManager;
use EdenNews\Validator;

class ArticleController
{
    public function __construct() {
        $this->users = new ArticleManager();
        $this->validator = new Validator();
    }
    public function show() {
        if (isset($_GET["id"])) {
            $article = $this->users->getArticle($_GET["id"]);
        } else {
            header("Location: /");
        }
    }
}