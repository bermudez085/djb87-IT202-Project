<?php
// Name: Daniel Bermudez
// Date: 11/1/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
if (!isset($_POST['GourmetFoodsProductID']) or (!is_numeric($_POST['GourmetFoodsProductID']))) {
?>
   <h2>You did not select a valid GourmetFoodsProductID value</h2>
   <a href="index.php?content=listGourmetFoodsProduct">List items</a>
   
<?php
} else {
   $GourmetFoodsProductID = $_POST['GourmetFoodsProductID'];
   $GourmetFoodsProduct = Product::findProduct($GourmetFoodsProductID);
   if ($GourmetFoodsProduct) {
?>
       <h2>Update GourmetFoodsProduct <?php echo htmlspecialchars($GourmetFoodsProduct->GourmetFoodsProductID); ?></h2><br>
       <form name="GourmetFoodsProduct" action="index.php" method="post">
           <table>
               <tr>
                   <td>GourmetFoodsProductID</td>
                   <td><?php echo htmlspecialchars($GourmetFoodsProduct->GourmetFoodsProductID); ?></td>
               </tr>
               <tr>
                   <td>Name</td>
                   <td><input type="text" name="GourmetFoodsProductName" value="<?php echo htmlspecialchars($GourmetFoodsProduct->GourmetFoodsProductName); ?>"></td>
               </tr>
               <tr>
                   <td>Category ID</td>
                   <td><input type="text" name="GourmetFoodsCategoryID" value="<?php echo htmlspecialchars($GourmetFoodsProduct->GourmetFoodsCategoryID); ?>"></td>
               </tr>
               <tr>
                   <td>List Price</td>
                   <td><input type="text" name="GourmetFoodsListPrice" value="<?php echo htmlspecialchars($GourmetFoodsProduct->GourmetFoodsListPrice); ?>"></td>
               </tr>
               <tr>
                   <td>Description</td>
                   <td><input type="text" name="GourmetFoodsdescription" value="<?php echo htmlspecialchars($GourmetFoodsProduct->GourmetFoodsdescription); ?>"></td>
               </tr>
               <tr>
                   <td>Wholesale Price</td>
                   <td><input type="text" name="GourmetFoods_WholesalePrice" value="<?php echo htmlspecialchars($GourmetFoodsProduct->GourmetFoods_WholesalePrice); ?>" required></td>
               </tr>
               <tr>
                   <td>Product Code</td>
                   <td><input type="text" name="GourmetFoodsProductCode" value="<?php echo htmlspecialchars($GourmetFoodsProduct->GourmetFoodsProductCode); ?>" required></td>
               </tr>
           </table><br><br>
           <input type="submit" name="answer" value="Update Item">
           <input type="submit" name="answer" value="Cancel">
           <input type="hidden" name="GourmetFoodsProductID" value="<?php echo htmlspecialchars($GourmetFoodsProductID); ?>">
           <input type="hidden" name="content" value="changeGourmetFoodsProduct">
       </form>

       
<?php
   } else {
?>
        <h2>Sorry, item <?php echo htmlspecialchars($GourmetFoodsProductID); ?> not found</h2>
        <a href="index.php?content=listGourmetFoodsProduct">List items</a>
<?php
    }
}
?>