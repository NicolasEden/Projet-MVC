<?php
namespace EdenNews\Models;

use EdenNews\Models\User;
/** Class UserManager **/
class UserManager {

    private $bdd;

    public function __construct() {
        $this->bdd = new \PDO('mysql:host='.HOST.';dbname=' . DATABASE . ';charset=utf8;' , USER, PASSWORD);
        $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getBdd()
    {
        return $this->bdd;
    }

    public function find($username) {
        $stmt = $this->bdd->prepare("SELECT * FROM Users WHERE username = ?");
        $stmt->execute(array(
            $username
        ));
        $stmt->setFetchMode(\PDO::FETCH_CLASS,"Todo\Models\User");

        return $stmt->fetch();
    }

    public function all() {
        $stmt = $this->bdd->query('SELECT * FROM Users');

        return $stmt->fetchAll(\PDO::FETCH_CLASS,"Todo\Models\User");
    }

    public function store($password) {
        $id = uniqid();
        $stmt = $this->bdd->prepare("INSERT INTO Users(id, username, password) VALUES (?, ?, ?)");
        $stmt->execute(array(
            $id,
            $_POST["username"],
            $password
        ));
    }
}
