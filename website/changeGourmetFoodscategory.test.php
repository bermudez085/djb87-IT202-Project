<?php
// Name: Daniel Bermudez
// Date: 10/19/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
include("GourmetFoodscategory.php");
$categoryID = $_GET['categoryID'];
$category = Category::findCategory($categoryID);
$category->GourmetFoodsCategoryID = $_GET['categoryID'];
$category->GourmetFoodsCategoryCode = $_GET['categoryCode'];
$category->GourmetFoodsCategoryName = $_GET['categoryName'];
$category->GourmetFoodsCategoryAisleNumber = $_GET['categoryAisleNumber'];
$result = $category->updateCategory();
if ($result) {
   echo "<h2>Category $categoryID updated</h2>\n";
} else {
   echo "<h2>Problem updating category $categoryID</h2>\n";
}
