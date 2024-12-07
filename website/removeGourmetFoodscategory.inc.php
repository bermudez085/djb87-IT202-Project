<?php
// Name: Daniel Bermudez
// Date: 10/19/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
//error_log("\$_GET " . print_r($_GET, true));
//include("GourmetFoodscategory.php");
if (isset($_SESSION['login'])){
   if (!isset($_REQUEST['categoryID']) or (!is_numeric($_REQUEST['categoryID']))) {
?>
      <h2>You did not select a valid categoryID to delete.</h2>
      <a href="index.php?content=listGourmetFoodscategories">List Categories</a>
<?php
} else {
      
   $GourmetFoodsCategoryID = $_POST['GourmetFoodsCategoryID'];
   $GourmetFoodsCategory = Category::findCategory($GourmetFoodsCategoryID);
   $result = $GourmetFoodsCategory->removeCategory();
   if ($result)
      echo "<h2>Category $GourmetFoodsCategoryID removed</h2>\n";
   else
      echo "<h2>Sorry, problem removing category $GourmetFoodsCategoryID</h2>\n";
   }
} else {
   echo "<H2>Please login first</h2>\n";
}
   

?>
