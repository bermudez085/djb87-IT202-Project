<?php
// Name: Daniel Bermudez
// Date: 10/19/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
include('GourmetFoodsproduct.php');

$productID = $_GET['GourmetFoodsProductID'];
if ((trim($productID) == '') or (!is_numeric($productID))) {
    echo "<h2>Sorry, you must enter a valid product ID number</h2>\n";
} else {
    $productCode = $_GET['GourmetFoodsProductCode'];
    $productName = $_GET['GourmetFoodsProductName'];
    $categoryID = $_GET['GourmetFoodsCategoryID'];
    $listPrice = $_GET['GourmetFoodsListPrice'];
    $wholesalePrice = $_GET['GourmetFoods_WholesalePrice'];
    $description = $_GET['GourmetFoodsdescription'];
    $outOfStock = $_GET['GourmetFoodsProductOutOfStock'];
    //$outOfStock = "NO";
}
$product = new Product(
    $productID,
    $productCode,
    $productName,
    $description,
    $outOfStock,
    $categoryID,
    $wholesalePrice,
    $listPrice,
    
);

$result = $product->saveProduct();
if ($result)
    echo "<h2>New Product #$productID successfully added</h2>\n";
else
    echo "<h2>Sorry, there was a problem adding that product</h2>\n";
