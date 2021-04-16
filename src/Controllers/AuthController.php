<?php
namespace EdenNews\Controllers;

use EdenNews\Models\ArticleManager;
use EdenNews\Models\CategoryManager;
use EdenNews\Models\UserManager;
use EdenNews\Validator;

class AuthController {
    private Validator $validator;

    public function __construct() {
        $this->users = new UserManager();
        $this->validator = new Validator();
    }

    public function authIndex() {
        require VIEWS . 'EdenNews/Auth/auth.php';
    }

    public function registUser() {
        if ($_POST["firstname"] === "") {
            echo "firstnameEMerci de remplir ce champs$";
        }
        if ($_POST["lastname"] === "") {
            echo "lastnameEMerci de remplir ce champs$";
        }
        if ($_POST["email"] === "") {
            echo "emailEMerci de remplir ce champs$";
        }
         if ($_POST["password"] === "") {
             echo "passwordEMerci de remplir ce champs$";
         }
         if ($_POST["confirmPassword"] === "") {
            echo "confirmPasswordEMerci de remplir ce champs$";
         }
         if ($_POST["confirmPassword"] === $_POST["password"]) {
            echo "passwordEVos mots de passe ne correspondent pas$";
         }
         if ($_POST["password"] && strlen($_POST["password"]) < 8) {
            echo "passwordEVotre mot de passe doit faire plus de 8 caractères$";
         }
         $find = false;
         foreach (explode($_POST["password"]) as $item) {
             if ($item === strtoupper($item)) $find = true;
         }
         if ($find === false)  echo "passwordEVotre mot de passe doit avoir une majuscule$";
    }
}

