<?php
// Name: Daniel Bermudez
// Date: 10/19/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
include("GourmetFoodscategory.php");
$categories = Category::getCategories();
foreach($categories as $category) {
   $GourmetFoodsCategoryID = $category->GourmetFoodsCategoryID;
   $name = $GourmetFoodsCategoryID . " - " . $category->GourmetFoodsCategoryCode . ", " . $category->GourmetFoodsCategoryName;
   echo "$name<br>";
}
?>
