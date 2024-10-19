<?php
// Name: Daniel Bermudez
// Date: 10/19/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
include("GourmetFoodsproduct.php");
$products = Product::getProducts();
foreach ($products as $product) {
   $productID = $product->GourmetFoodsProductID;
   $productName = $product->GourmetFoodsProductName;
   $productPrice = $product->GourmetFoodsListPrice;
   $option = $productID . " - " . $productName . " - " . $productPrice;
   echo "$option<br>";
}
?>
