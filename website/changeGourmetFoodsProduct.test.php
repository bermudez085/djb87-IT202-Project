<?php
// Name: Daniel Bermudez
// Date: 10/19/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
include("GourmetFoodsproduct.php");
$productID = $_GET['GourmetFoodsProductID'];
$product = Product::findProduct($productID);
//$product->GourmetFoodsProductID = $_GET['GourmetFoodsProductID'];
$product->GourmetFoodsProductCode = $_GET['GourmetFoodsProductCode'];
$product->GourmetFoodsProductName = $_GET['GourmetFoodsProductName'];
$product->GourmetFoodsCategoryID = $_GET['GourmetFoodsCategoryID'];
$product->GourmetFoodsListPrice = $_GET['GourmetFoodsListPrice'];
$product->GourmetFoods_WholesalePrice = $_GET['GourmetFoods_WholesalePrice'];
$product->GourmetFoodsdescription = $_GET['GourmetFoodsdescription'];
$product->GourmetFoodsProductOutOfStock = $_GET['GourmetFoodsProductOutOfStock'];
//$product->GourmetFoodsProductOutOfStock = null;
$result = $product->updateProduct();
if ($result) {
   echo "<h2>Product $productID updated</h2>\n";
} else {
   echo "<h2>Problem updating product $productID</h2>\n";
}
