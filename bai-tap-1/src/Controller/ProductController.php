<?php


namespace App\Controller;


use App\Model\ProductManager;
use App\Model\Products;

class ProductController
{
    protected $productManager;

    public function __construct()
    {
        $this->productManager = new ProductManager();
    }

    public function viewProducts()
    {
        $products = $this->productManager->getAllProduct();
        include_once "src/View/listProduct.php";
    }

    public function addProducts()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            include_once 'src/View/add-listProduct.php';
        }else{
            $id = $_POST['id'];
            $name = $_POST['name'];
            $sku = $_POST['sku'];
            $categoryId = $_POST['categoryId'];
            $color = $_POST['color'];
            $img = $_POST['img'];
            $size = $_POST['size'];
            $price = $_POST['price'];
            $currency = $_POST['currency'];
            $description = $_POST['description'];
            $statusId = $_POST['statusId'];

            $product = new Products($id,$name,$sku,$categoryId,$color,$img,$size,$price,$currency,$description,$statusId);
            $this->productManager->addProducts($product);
            header('location: index.php');
        }
    }

    public function deleteProducts()
    {
        $id = $_REQUEST['Id'];
        $this->productManager->deleteProducts($id);
        header('location: index.php');
    }

    public function editProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $sku = $_POST['sku'];
            $categoryId = $_POST['categoryId'];
            $color = $_POST['color'];
            $img = $_POST['img'];
            $size = $_POST['size'];
            $price = $_POST['price'];
            $currency = $_POST['currency'];
            $description = $_POST['description'];
            $statusId = $_POST['statusId'];

            $product = new Products($id,$name,$sku,$categoryId,$color,$img,$size,$price,$currency,$description,$statusId);
            $this->productManager->updateProducts($id,$product);
            header('location: index.php');
        }
        $id = $_REQUEST['Id'];
        $product = $this->productManager->getProducts($id);
        include_once 'src/View/edit-listProduct.php';
    }

    public function show($id)
    {
        $product = $this->productManager->show($id);
        include_once 'src/View/show-product-detail.php';
    }
}