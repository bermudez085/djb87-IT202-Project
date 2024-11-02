<h2>Select Product</h2>
<form name="items" method="post">
   <select name="itemID" size="20">
<?php
// Name: Daniel Bermudez
// Date: 10/19/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
//include("GourmetFoodsproduct.php");
$products = Product::getProducts();
foreach ($products as $product) {
   $productID = $product->GourmetFoodsProductID;
   $productCode = $product->GourmetFoodsProductCode;
   $productName = $product->GourmetFoodsProductName;
   $productdescription = $product->GourmetFoodsdescription;
   $productOutOfStock = $product->GourmetFoodsProductOutOfStock ? "Yes" : "No"; 
   $productCategoryID = $product->GourmetFoodsCategoryID;
   $productWholesalePrice = $product->GourmetFoods_WholesalePrice;
   $productPrice = $product->GourmetFoodsListPrice;
   $option = "$productID - $productCode - $productName - $productdescription - " .
             "Out of Stock: $productOutOfStock - Category ID: $productCategoryID - " .
             "Wholesale Price: $" . number_format($productWholesalePrice, 2) . " - " .
             "List Price: $" . number_format($productPrice, 2);
   
   echo "<option value=\"$productID\">$option</option>\n";
}
?>
   </select>
</form>

