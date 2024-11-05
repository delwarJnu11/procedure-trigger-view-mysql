<?php

include_once __DIR__. "/../../models/Product.php";
include_once __DIR__. "/../../models/Manufacturer.php";

$manufacturers = Manufacturer::get_manufactruers();

if(isset($_GET['id'])){
    $id = $_GET['id'];

    if($id){
        $product = Product::get_product($id);
    }
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['id'];
    $productname = $_POST['productname'];
    $price = $_POST['price'];
    $manufacturer_id = $_POST['manufacturer_id'];

    if($id && $productname && $price && $manufacturer_id){
        $product = new Product($productname, $price, $manufacturer_id);
        $result = $product->update_product($id);
        if($result){
            header("location: /products");
        }else{
            echo "There was an error occurred!";
        }

    }
}

include_once __DIR__."/../../views/products/edit.view.php";