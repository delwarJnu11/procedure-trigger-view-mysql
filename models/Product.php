<?php


class Product{
    protected $productname;
    protected $price;
    protected $manufacturer_id;


    public function __construct($product_name, $price, $manufacturer_id)
    {
        $this->productname = $product_name;
        $this->price = $price;
        $this->manufacturer_id = $manufacturer_id;
    }

    // Create Product
    public function create_product()
    {
        global $db;
        $stmnt = $db->prepare("INSERT INTO products(product_name, price, manufacturer_id) VALUES(?,?,?)");
        $stmnt->bind_param("sdi", $this->productname, $this->price, $this->manufacturer_id);
        return $stmnt->execute();
    }

    // Get all Product
    public static function get_products()
    {
        global $db;
        $stmnt = $db->prepare("call get_products");
        $stmnt->execute();
        $result = $stmnt->get_result();
        if($result){
            $products = $result->fetch_all(MYSQLI_ASSOC);
            return $products;
        }else{
            return [];
        }
    }
    // Update Product
    public function update_product($id)
    {
        global $db;
        $stmnt = $db->prepare("UPDATE products SET product_name = ?, price = ?, manufacturer_id = ? WHERE id = ?");
        $stmnt->bind_param("sdii", $this->productname, $this->price, $this->manufacturer_id, $id);
        return $stmnt->execute();
        
    }
    // Get Single Product
    public static function get_product($id)
    {
        global $db;
        $stmnt = $db->prepare("SELECT * FROM products WHERE id = ?");
        $stmnt->bind_param("i", $id);
        $stmnt->execute();
        $result = $stmnt->get_result();
        if($result){
            $products = $result->fetch_object();
            return $products;
        }else{
            return [];
        }
    }
}