<?php


namespace EdenNews\Models;


class Article
{
    private $id;
    private $header;
    private $content;
    private $timestamp;
    private $resume;
    private $firstname;
    private $lastname;
    private $name;
    private $date;
    private $image;
    private $thumb;
    private $views;
    private $shares;
    private $comments;
    private $category;
    private $color;

    /**
     * @return mixed
     */
    public function getId() // Permet d'obtenir l'identifiant d'un article
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getHeader() // Permet d'obtenir le titre d'un article
    {
        return $this->header;
    }

    /**
     * @return mixed
     */
    public function getContent() // Permet d'obtenir le contenu d'un article
    {
        return $this->content;
    }

    /**
     * @return mixed
     */
    public function getTimestamp() // Permet d'obtenir la date précise de création d'un article
    {
        return $this->timestamp;
    }

    /**
     * @return mixed
     */
    public function getResume() // Permet d'obtenir le résumé d'un article
    {
        return $this->resume;
    }

    /**
     * @return mixed
     */
    public function getImage() // Permet d'obtenir l'image lié a l'article
    {
        return $this->image;
    }

    /**
     * @return mixed
     */
    public function getThumb() /// Permet d'obtenir l'image lié à un article, mais en plus petite
    {
        return $this->thumb;
    }

    /**
     * @return mixed
     */
    public function getViews() // Permet d'obtenir le nombre de vues d'un article
    {
        return $this->views;
    }

    /**
     * @return mixed
     */
    public function getShares() // Permet d'obtenir le nombre de partages d'un article
    {
        return $this->shares;
    }

    /**
     * @return mixed
     */
    public function getComments() // Permet d'obtenir le nombre de commentaires d'un article
    {
        return $this->comments;
    }

    /**
     * @return mixed
     */
    public function getCategory() // Permet d'obtenir le nom de la catégorie d'un article
    {
        return $this->category;
    }

    /**
     * @return mixed
     */
    public function getColor() // Permet d'obtenir la couleur d'un catégorie
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getLastname() // Permet d'obtenir le nom de l'auteur d'un article
    {
        return $this->lastname;
    }

    /**
     * @return mixed
     */
    public function getFirstname() // Permet d'obtenir le prénom de l'auteur d'un article
    {
        return $this->firstname;
    }

    /**
     * @return mixed
     */
    public function getName() // Permet d'obtenir le prénom et nom de l'auteur
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void // Permet de définir le prénom et nom de l'auteur
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDate() // Permet d'obtenir la date de création d'un article
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void // Permet de définir la date de création d'un article
    {
        $this->date = $date;
    }
}