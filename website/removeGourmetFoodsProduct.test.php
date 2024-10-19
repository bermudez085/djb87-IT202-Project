<?php
// Name: Daniel Bermudez
// Date: 10/19/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
include("GourmetFoodsproduct.php");
$productID = $_GET['GourmetFoodsProductID'];
$product = Product::findProduct($productID);
$result = $product->removeProduct();
if ($result)
   echo "<h2>Product $productID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing product $productID</h2>\n";
?>
