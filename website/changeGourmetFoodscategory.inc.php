<?php
// Name: Daniel Bermudez
// Date: 11/1/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
include("GourmetFoodscategory.php");

$GourmetFoodsCategoryID = $_POST['GourmetFoodsCategoryID'];
$category = Category::findCategory($GourmetFoodsCategoryID);

if ($category) {
    $category->GourmetFoodsCategoryCode = $_POST['GourmetFoodsCategoryCode'];
    $category->GourmetFoodsCategoryName = $_POST['GourmetFoodsCategoryName'];
    $category->GourmetFoodsCategoryAisleNumber = $_POST['GourmetFoodsCategoryAisleNumber'];

    $result = $category->updateCategory();
    
    if ($result) {
        echo "<h2>Category #$GourmetFoodsCategoryID updated</h2>\n";
    } else {
        echo "<h2>Problem updating category #$GourmetFoodsCategoryID</h2>\n";
    }
} else {
    echo "<h2>Category #$GourmetFoodsCategoryID not found</h2>\n";
}
?>
