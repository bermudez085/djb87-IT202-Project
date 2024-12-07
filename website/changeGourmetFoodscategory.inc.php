<?php
// Name: Daniel Bermudez
// Date: 11/1/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
//include("GourmetFoodscategory.php");
if (isset($_SESSION['login'])) {
    $categoryID = $_POST['categoryID'];
    $answer = $_POST['answer'];
    if ($answer == "Update Category") {

        $GourmetFoodsCategoryID = $_POST['categoryID'];
        $category = Category::findCategory($GourmetFoodsCategoryID);


        $category->GourmetFoodsCategoryCode = $_POST['GourmetFoodsCategoryCode'];
        $category->GourmetFoodsCategoryName = $_POST['GourmetFoodsCategoryName'];
        //$category->GourmetFoodsCategoryAisleNumber = $_POST['GourmetFoodsCategoryAisleNumber'];

        $result = $category->updateCategory();
    
        if ($result) {
            echo "<h2>Category #$categoryID updated</h2>\n";
        } else {
        echo "<h2>Problem updating category #$categoryID</h2>\n";
        }
    } else {
    echo "<h2>Category #$categoryID not found</h2>\n";
    }
} else{
    echo "<h2>Please login first</h2>\n";
}

?>
