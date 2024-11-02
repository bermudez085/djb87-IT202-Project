<?php
// Name: Daniel Bermudez
// Date: 10/19/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu

// Start session to access $_SESSION variables
//session_start();

// include("GourmetFoodsproduct.php");

if (isset($_SESSION['login'])) {
    $GourmetFoodsProductID = $_POST['GourmetFoodsProductID'];
    $answer = $_POST['answer'];

    if ($answer == "Update Item") {
        $GourmetFoodsProductID = $_POST['GourmetFoodsProductID'];
        $GourmetFoodsProduct = Product::findProduct($GourmetFoodsProductID);

        if ($GourmetFoodsProduct) {
        $GourmetFoodsProduct->GourmetFoodsProductCode = $_POST['GourmetFoodsProductCode'];
        $GourmetFoodsProduct->GourmetFoodsProductName = $_POST['GourmetFoodsProductName'];
        $GourmetFoodsProduct->GourmetFoodsCategoryID = $_POST['GourmetFoodsCategoryID'];
        $GourmetFoodsProduct->GourmetFoodsListPrice = $_POST['GourmetFoodsListPrice'];
        $GourmetFoodsProduct->GourmetFoods_WholesalePrice = $_POST['GourmetFoods_WholesalePrice'];
        $GourmetFoodsProduct->GourmetFoodsdescription = $_POST['GourmetFoodsdescription'];
        $GourmetFoodsProduct->GourmetFoodsProductOutOfStock = isset($_POST['GourmetFoodsProductOutOfStock']) ? 'YES' : 'NO';

        $result = $GourmetFoodsProduct->updateProduct();

        if ($result) {
            echo "<h2>Product $GourmetFoodsProductID updated</h2>\n";
        } else {
            echo "<h2>Problem updating product $GourmetFoodsProductID</h2>\n";
        }
    } else {
        echo "<h2>Update Canceled for item $GourmetFoodsProductID</h2>\n";
    }
} else {
    echo "<h2>Please login first</h2>\n";
}
}
?>
