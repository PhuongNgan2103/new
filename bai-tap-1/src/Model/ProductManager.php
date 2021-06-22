<?php


namespace App\Model;


class ProductManager
{
    protected $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }

    public function getAllProduct()
    {
        $spl = 'SELECT * FROM Products ORDER BY create_at DESC';
        $result = $this->dbConnect->query($spl);
        $product = [];
        foreach ($result as $item) {
            $product[] = new Products($item['id'], $item['name'], $item['sku'],$item['CategoryId'],$item['color'],$item['img'],$item['size'],$item['price'],$item['currency'],$item['description'],$item['statusId']);
        }
            return $product;
    }

    public function show($id)
    {
        $spl = "SELECT * FROM Products WHERE id = '$id'";
        $result = ($this->dbConnect->query($spl))[0];
        return new Products($result[0], $result[1],$result[2],$result[3],$result[4],$result[5],$result[6],$result[7],$result[8],$result[9],$result[10]);
    }

    public function addProducts($product)
    {
        $id = $product->getId();
        $name = $product->getName();
        $sku = $product->getSku();
        $categoryId = $product->getCategoryID();
        $color = $product->getColor();
        $img = $product->getImg();
        $size = $product->getSize();
        $price = $product->getPrice();
        $currency = $product->getCurrency();
        $description = $product->getDescription();
        $statusId = $product->getStatusId();

        $sql = "INSERT INTO `products`(`id`, `name`, `sku`, `CategoryId`, `color`, `img`, `size`, `price`, `currency`, `description`, `statusId`) VALUES ('$id','$name','$sku','$categoryId','$color','$img','$size','$price','$currency','$description','$statusId')";
        $this->dbConnect->execute($sql);
    }

    public function deleteProducts($id)
    {
        $sql = "DELETE FROM `products` WHERE id = '$id'";
        $this->dbConnect->execute($sql);
    }

    public function updateProducts($id,$product)
    {
        $id = $product->getId();
        $name = $product->getName();
        $sku = $product->getSku();
        $categoryId = $product->getCategoryID();
        $color = $product->getColor();
        $img = $product->getImg();
        $size = $product->getSize();
        $price = $product->getPrice();
        $currency = $product->getCurrency();
        $description = $product->getDescription();
        $statusId = $product->getStatusId();
        $create_at = $product->getCreateAt();


        $sql = "UPDATE `products` SET `id`='$id',`name`='$name',`sku`='$sku',`CategoryId`='$categoryId',`color`='$color',`img`='$img',`size`='$size',`price`='$price',`currency`='$currency',`description`='$description',`statusId`='$statusId',`create_at`='$create_at' WHERE id ='$id'";
        $this->dbConnect->execute($sql);
    }

    public function getProducts($id)
    {
        $sql = "SELECT * FROM Products WHERE id = '$id'";
        return $this->dbConnect->query($sql);
    }
}