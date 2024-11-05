<?php

include_once __DIR__."/../../models/Manufacturer.php";

// Get manufacturer ID from Query params
if(isset($_GET['id'])){
    $id = $_GET['id'];

    if($id){
        $manufacturer = Manufacturer::get_manufcturer($id);
    }
}
// Update manufacturer
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['id'];
    $manufacturer_name = $_POST['manufacturername'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    if($id && $manufacturer_name && $contact && $address){
        $manufacturer = new Manufacturer($manufacturer_name, $contact, $address);
        $res = $manufacturer->update_manufacturer($id);
        if($res){
            header("location: /manufacturers");
        }
    }
}


include_once __DIR__."/../../views/manufacturer/edit.view.php";