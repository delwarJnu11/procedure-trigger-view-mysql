<?php

include_once __DIR__."/../../models/Manufacturer.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $manufacturer_name = $_POST['manufacturername'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    if($manufacturer_name && $contact && $address){
        $manufacturer = new Manufacturer($manufacturer_name, $contact, $address);
        $res = $manufacturer->create_manufacturer();
        if($res){
            header("location: /manufacturers");
        }
    }
}

include_once __DIR__."/../../views/manufacturer/create.view.php";