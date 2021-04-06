<?php
namespace EdenNews\Controllers;

use EdenNews\Validator;

class HomeController {
    private Validator $validator;

    public function __construct() {
        $this->validator = new Validator();
    }

    public function index() {
        require VIEWS . 'EdenNews/Home.php';
    }
    public function admin() {
        $formations = $this->formationManager->getFormations();
        $nations = $this->nationManager->getNations();
        $formateurs = $this->formateurManager->getFormateurs();
        $stagiaires = $this->stagiaireManager->getStagiaires();
        $formationFinalmanager = $this->formationFinalmanager->getFinalFormation();
        require VIEWS . 'EdenNews/Admin.php';
    }

    public function showAll() {
        require VIEWS . 'EdenNews/index.php';
    }
}

