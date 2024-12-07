<?php
// Name: Daniel Bermudez
// Date: 11/1/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
//if (!isset($_REQUEST['GourmetFoodsCategoryID']) or 
//(!is_numeric($_REQUEST['GourmetFoodsCategoryID']))) {
    
    // Debugging: Output the value of GourmetFoodsCategoryID
    //echo '<pre>';
    //print_r($_REQUEST);
    //echo '</pre>';
        
if (!isset($_REQUEST['GourmetFoodsCategoryID']) or 
    (!is_numeric($_REQUEST['GourmetFoodsCategoryID']))) {
    ?>
   <h2>You did not select a valid GourmetFoodsCategoryID to view.</h2>
   <a href="index.php?content=listGourmetFoodscategories">List Categories</a>
<?php
} else {
   $GourmetFoodsCategoryID = $_REQUEST['GourmetFoodsCategoryID'];
   $category = Category::findCategory($GourmetFoodsCategoryID);
   if ($category) {
       echo $category;
       echo "<br><br>\n";
   } else {
       echo "<h2>Sorry, category $GourmetFoodsCategoryID not found</h2>\n";
   }
}
?>

