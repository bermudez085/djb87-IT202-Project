
<!--
Name: Daniel Bermudez
Date: 11/1/2024
Course Name and Section: IT-202-005
Assignment Name and Email: Phase 1 Assignment: Login and Logout / djb87@njit.edu
-->

<h2>Enter New Item Information</h2>
<form name="newitem" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Product ID:</td>
           <td><input type="text" name="GourmetFoodsProductID" size="10" minlength="3" maxlength="10" required></td>
       </tr>
       <tr>
           <td>Product Code:</td>
           <td><input type="text" name="GourmetFoodsProductCode" size="10" minlength="3" maxlength="10" required></td>
       </tr>
       <tr>
           <td>Name:</td>
           <td><input type="text" name="GourmetFoodsProductName" size="50" minlength="10" maxlength="100" required></td>
       </tr>
       <tr>
           <td>Category ID:</td>
           <td><input type="text" name="GourmetFoodsCategoryID" size="10" min="3" max="10" required></td>
       </tr>
       <tr>
           <td>Description:</td>
           <td><input type="text" name="GourmetFoodsdescription" size="255" minlength="100" maxlength="255" required></td>
       </tr>
       <tr>
           <td>List Price:</td>
           <td><input type="number" name="GourmetFoodsListPrice" size="10" step="0.01" min="0" max="9999.99" required></td>
       </tr>
       <tr>
           <td>Wholesale Price:</td>
           <td><input type="number" name="GourmetFoods_WholesalePrice" size="10" step="0.01" min = "0" max="9999.99" required></td>
       </tr>
       <tr>
           <td>Out Of Stock:</td>
           <td><input type="checkbox" name="GourmetFoodsProductOutOfStock" value="YES"></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Item">
   <input type="hidden" name="content" value="addGourmetFoodsProduct">
</form>
