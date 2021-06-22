<?php


namespace App\Controller;


use App\Model\CategoryManager;
use App\Model\Category;

class CategoryController
{
    protected $categoryManager;

    public function __construct()
    {
        $this->categoryManager = new CategoryManager();
    }

    public function viewCategory()
    {
        $data = $this->categoryManager->getAllCategory();
    }
}