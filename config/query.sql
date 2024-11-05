-- Create manufacturer table 
CREATE TABLE manufacturer(
    id int auto_increment primary key,
    name varchar(255) not null,
    address varchar(255) not null,
    contact_no varchar(50) not null
);

-- Create products table 
CREATE TABLE products(
    id int auto_increment primary key,
    product_name varchar(255) not null,
    price decimal(10,2) default(0.00),
    manufacturer_id int not null
);

-- Create View 
CREATE VIEW products_view AS
SELECT products.product_name, products.price, manufacturer.name FROM products JOIN manufacturer ON products.manufacturer_id = manufacturer.id;

-- Create Procedure get_products
DELIMITER //
CREATE PROCEDURE get_products()
BEGIN

select * from products_view;

END //
DELIMITER ;

-- Create Trigger if manufacturer is deleted then that product which holds on manufacturer_id is automatic deleted
DELIMITER //
CREATE TRIGGER delete_products 
AFTER DELETE
ON manufacturer
FOR EACH ROW
BEGIN
DELETE FROM products WHERE manufacturer_id = OLD.id;
END //
DELIMITER ;
