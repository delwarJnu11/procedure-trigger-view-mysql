<?php

include_once __DIR__."/../../models/Manufacturer.php";

// Get manufacturer ID from Query params
if(isset($_GET['id'])){
    $id = $_GET['id'];

    // Delete the manufacturer
    if($id){
        $res = Manufacturer::delete_manufacturer($id);
        if($res){
            header("location: /manufacturers");
        }
    }
}