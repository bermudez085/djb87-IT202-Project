<?php
// Name: Daniel Bermudez
// Date: 10/19/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
error_log("\$_GET " . print_r($_GET, true));
include("GourmetFoodscategory.php");
$GourmetFoodsCategoryID = $_GET['GourmetFoodsCategoryID'];
$GourmetFoodsCategory = Category::findCategory($GourmetFoodsCategoryID);
$result = $GourmetFoodsCategory->removeCategory();
if ($result)
   echo "<h2>Category $GourmetFoodsCategoryID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing category $GourmetFoodsCategoryID</h2>\n";


?>
