<?php

require_once __DIR__."/../config/db_config.php";

class Manufacturer{
    protected $manufacturer_name;
    protected $contact;
    protected $address;

    public function __construct($manufacturer_name, $contact, $address)
    {
        $this->manufacturer_name = $manufacturer_name;
        $this->contact = $contact;
        $this->address = $address;
    }

    // create Manufacturer
    public function create_manufacturer()
    {
        global $db;
        $stmnt = $db->prepare("INSERT INTO manufacturer(name, contact_no, address) VALUES(?, ?, ?)");
        $stmnt->bind_param("sss", $this->manufacturer_name, $this->contact, $this->address);
        return $stmnt->execute();
    }

    // Get all Manufacturer
    public static function get_manufactruers()
    {
        global $db;
        $stmnt = $db->prepare("select * from manufacturer");
        $stmnt->execute();
        $result = $stmnt->get_result();
        if($result){
            $roles = $result->fetch_all(MYSQLI_ASSOC);
            return $roles;
        }else{
            return [];
        }
    }

    // Update Manufacturer
    public function update_manufacturer($id)
    {
        global $db;
        $stmnt = $db->prepare("UPDATE manufacturer SET name = ?, contact_no = ?, address = ? WHERE id = ?");
        $stmnt->bind_param("sssi", $this->manufacturer_name, $this->contact, $this->address, $id);
        return $stmnt->execute();
        
    }
    // Get Single Manufacturer
    public static function get_manufcturer($id)
    {
        global $db;
        $stmnt = $db->prepare("SELECT * FROM manufacturer WHERE id = ?");
        $stmnt->bind_param("i", $id);
        $stmnt->execute();
        $result = $stmnt->get_result();
        if($result){
            $manufacturer = $result->fetch_object();
            return $manufacturer;
        }else{
            return [];
        }
    }

    // Delete Manufacturer
    public static function delete_manufacturer($id)
    {
        global $db;
        $stmnt = $db->prepare("DELETE FROM manufacturer WHERE id = ?");
        $stmnt->bind_param("i", $id);
        return $stmnt->execute();
    }
}