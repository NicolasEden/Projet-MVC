<?php


namespace EdenNews\Models;


class Category
{
    private $id;
    private $category_name;

    /**
     * @return mixed
     */
    public function getCategoryName()
    {
        return $this->category_name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

}