<?php
namespace EdenNews\Controllers;

use EdenNews\Models\CategoryManager;
use EdenNews\Validator;

class HomeController {
    private Validator $validator;

    public function __construct() {
        $this->category = new CategoryManager();
        $this->validator = new Validator();
    }

    public function index() {
        $category = $this->category->all();
        require VIEWS . 'EdenNews/Home.php';
    }
    public function admin() {
        $category = $this->category->all();
        require VIEWS . 'EdenNews/Admin.php';
    }

    public function showAll() {
        require VIEWS . 'EdenNews/index.php';
    }
}

