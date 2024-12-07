<script language="javascript">
   function listbox_dblclick() {
       document.items.updateitem.click()
   }


   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this item?");
       }
       if (userConfirmed) {
           if (target == 1) items.action = "index.php?content=removeGourmetFoodsProduct";
           if (target == 2) items.action = "index.php?content=updateGourmetFoodsProduct";
       } else {
           alert("Action canceled.");
       }
   }
</script>

<h2>Select Product</h2>
<form name="items" method="post">
   <select name="GourmetFoodsProductID" ondblclick="listbox_dblclick()" name="itemID" size="20">

<?php
// Name: Daniel Bermudez
// Date: 10/19/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
//include("GourmetFoodsproduct.php");
$products = Product::getProducts();
foreach ($products as $product) {
   $productID = $product->GourmetFoodsProductID;
   $productCode = $product->GourmetFoodsProductCode;
   $productName = $product->GourmetFoodsProductName;
   $productdescription = $product->GourmetFoodsdescription;
   $productOutOfStock = $product->GourmetFoodsProductOutOfStock ? "Yes" : "No"; 
   $productCategoryID = $product->GourmetFoodsCategoryID;
   $productWholesalePrice = $product->GourmetFoods_WholesalePrice;
   $productPrice = $product->GourmetFoodsListPrice;
   $option = "$productID - $productCode - $productName - $productdescription - " .
             "Out of Stock: $productOutOfStock - Category ID: $productCategoryID - " .
             "Wholesale Price: $" . number_format($productWholesalePrice, 2) . " - " .
             "List Price: $" . number_format($productPrice, 2);
   
   echo "<option value=\"$productID\">$option</option>\n";
}
?>
   </select>
   <br>
   <input type="submit" onClick="button_click(1)" name="deleteitem" value="Delete Item">
   <input type="submit" onClick="button_click(2)" name="updateitem" value="Update Item">

</form>

