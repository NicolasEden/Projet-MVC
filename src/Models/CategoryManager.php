<?php


namespace EdenNews\Models;


class CategoryManager
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
        $stmt = $this->bdd->query('SELECT * FROM category');

        return $stmt->fetchAll(\PDO::FETCH_CLASS,"EdenNews\Models\Category");
    }
}