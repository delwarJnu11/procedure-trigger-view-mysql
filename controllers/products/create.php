<?php


include_once __DIR__."/../../models/Product.php";
include_once __DIR__."/../../models/Manufacturer.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $productname = $_POST['productname'];
    $price = $_POST['price'];
    $manufacturer_id = $_POST['manufacturer_id'];

    if($productname && $price && $manufacturer_id){
        $product = new Product($productname, $price, $manufacturer_id);
        $result = $product->create_product();
        if($result){
            header("location: /products");
        }else{
            echo "There was an error occurred!";
        }

    }
}

$manufacturers = Manufacturer::get_manufactruers();

include_once __DIR__."/../../views/products/create.view.php";