<?php
// Name: Daniel Bermudez
// Date: 10/19/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
//include('GourmetFoodsproduct.php');

if (isset($_SESSION['login'])) {
    $GourmetFoodsProductID = filter_input(INPUT_POST,'GourmetFoodsProductID', FILTER_VALIDATE_INT);
    if ((trim($GourmetFoodsProductID) == '') || (!is_numeric($GourmetFoodsProductID))) {
        echo "<h2>Sorry, you must enter a valid product ID number</h2>\n";
    } else {
        $GourmetFoodsProductCode = htmlspecialchars($_POST['GourmetFoodsProductCode']);
        $GourmetFoodsProductName = htmlspecialchars($_POST['GourmetFoodsProductName']);
        $GourmetFoodsCategoryID = htmlspecialchars($_POST['GourmetFoodsCategoryID']);
        $GourmetFoodsListPrice = htmlspecialchars($_POST['GourmetFoodsListPrice']);
        $GourmetFoods_WholesalePrice = htmlspecialchars($_POST['GourmetFoods_WholesalePrice']);
        $GourmetFoodsdescription = htmlspecialchars($_POST['GourmetFoodsdescription']);
        $GourmetFoodsProductOutOfStock = htmlspecialchars(isset($_POST['GourmetFoodsProductOutOfStock']) ? '1' : '0');
        
    
        $product = new Product(
            $GourmetFoodsProductID,
            $GourmetFoodsProductCode,
            $GourmetFoodsProductName,
            $GourmetFoodsdescription,
            $GourmetFoodsProductOutOfStock,
            $GourmetFoodsCategoryID,
            $GourmetFoods_WholesalePrice,
            $GourmetFoodsListPrice
        );

        $result = $product->saveProduct();
        if ($result) {
            echo "<h2>New Product #$GourmetFoodsProductID successfully added</h2>\n";
        } else {
            echo "<h2>Sorry, there was a problem adding that product</h2>\n";
        }
    }
} else {
    echo "<h2>Please login first</h2>\n";
}
?>
