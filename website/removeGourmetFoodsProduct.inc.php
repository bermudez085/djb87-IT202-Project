<?php
// Name: Daniel Bermudez
// Date: 10/19/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
//include("GourmetFoodsproduct.php");
if (isset($_SESSION['login'])) {
   if (!isset($_POST['GourmetFoodsProductID']) or (!is_numeric($_POST['GourmetFoodsProductID']))) {
?>
      <h2>You did not select a valid itemID to delete.</h2>
      <a href="index.php?content=listGourmetFoodsProduct">List items</a>
<?php
} else {
      
   $productID = $_POST['GourmetFoodsProductID'];
   $product = Product::findProduct($productID);
   $result = $product->removeProduct();
   if ($result)
      echo "<h2>Product $productID removed</h2>\n";
  else
      echo "<h2>Sorry, problem removing product $productID</h2>\n";
   }
}else{
   echo "<h2>Please login first</h2>\n";
}
?>
