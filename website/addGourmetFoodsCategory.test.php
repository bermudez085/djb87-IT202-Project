
<?php
// Name: Daniel Bermudez
// Date: 10/19/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
include("GourmetFoodscategory.php");
$GourmetFoodsCategoryID = $_GET['GourmetFoodsCategoryID'];
if ((trim($GourmetFoodsCategoryID) == '') or (!is_numeric($GourmetFoodsCategoryID))) {
  echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
} else {
  $GourmetFoodsCategoryCode = $_GET['GourmetFoodsCategoryCode'];
  $GourmetFoodsCategoryName = $_GET['GourmetFoodsCategoryName'];
  $GourmetFoodsCategoryAisleNumber = $_GET['GourmetFoodsCategoryAisleNumber'];
  $category = new Category($GourmetFoodsCategoryID, $GourmetFoodsCategoryCode, $GourmetFoodsCategoryName, $GourmetFoodsCategoryAisleNumber);
  $result = $category->saveCategory();
  if ($result) {
    echo "<h2>New Category #$GourmetFoodsCategoryID successfully added</h2>\n";
    echo "<h2>$GourmetFoodsCategoryName</h2>\n";
  } else {
    echo "<h2>Sorry, there was a problem adding that category</h2>\n";
  }
}
