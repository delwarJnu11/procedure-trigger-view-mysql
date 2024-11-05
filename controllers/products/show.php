<?php

include_once __DIR__."/../../models/Product.php";

$products = Product::get_products();

include_once __DIR__ . "/../../views/products/show.view.php";