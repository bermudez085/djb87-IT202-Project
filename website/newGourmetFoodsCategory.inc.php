
<!--
Name: Daniel Bermudez
Date: 11/1/2024
Course Name and Section: IT-202-005
Assignment Name and Email: Phase 1 Assignment: Login and Logout / djb87@njit.edu
-->


<h2>Enter New Category Information</h2>
<form name="newcategory" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Category ID:</td>
           <td><input type="number" name="GourmetFoodsCategoryID" size="4" minlength="3" maxlength="10" required title="Category ID should be between 3 and 10 characters.">></td>
       </tr>
       <tr>
           <td>Category Code:</td>
           <td><input type="text" name="GourmetFoodsCategoryCode" size="20" placeholder="XXX" minlength="3" maxlength="10" required title="Category Code should be between 3 and 10 characters."></td>
       </tr>
       <tr>
           <td>Category Name:</td>
           <td><input type="text" name="GourmetFoodsCategoryName" size="50"  minlength="10" maxlength="100" required required title="Category Name should be between 10 and 100 characters."></td> 
       </tr>
       <tr>
           <td>Aisle Number:</td>
           <td><input type="text" name="GourmetFoodsCategoryAisleNumber" size="20" min="0" max="99" required title="Aisle Number should be between 0 and 99."></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Category">
   <input type="hidden" name="content" value="addGourmetFoodsCategory">
</form>
