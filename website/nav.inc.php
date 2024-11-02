<table width="100%" cellpadding="3">
   <?php
   // Name: Daniel Bermudez
// Date: 11/1/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
   if (!isset($_SESSION['login'])) {
   ?>
       <tr>
           <td>
               <hr />
           </td>
       </tr>
   <?php
   } else {
    echo "<td><h3>Welcome, {$_SESSION['login']}</h3></td>\n";
?>
    <tr>
        <td><a href="index.php"><strong>Home</strong></a></td>
    </tr>
    <tr>
        <td><strong>Categories</strong></td>
    </tr>
    <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listGourmetFoodscategories">
                   <strong>List Categories</strong></a></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newGourmetFoodsCategory">
                   <strong>Add New Category</strong></a></td>
       </tr>
       <tr>
           <td><strong>Products</strong></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listGourmetFoodsProduct">
                   <strong>List Products</strong></a></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newGourmetFoodsProduct">
                   <strong>Add New Product</strong></a></td>
       </tr>
       <tr>
           <td>
               <hr />
           </td>
       </tr>
       <tr>
           <td><a href="index.php?content=logout">
                   <strong>Logout</strong></a></td>
       </tr>
       <tr>
           <td>&nbsp;</td>
       </tr>
       <tr>
           <td>
               <form action="index.php" method="post">
                   <label>Search for Product:</label><br>
                   <input type="text" name="GourmetFoodsProductID" size="14" />
                   <input type="submit" value="find" />
                   <input type="hidden" name="content" value="updateGourmetFoodsProduct" />
               </form>
           </td>
       </tr>
       <tr>
           <td>
               <form action="index.php" method="post">
                   <label>Search for Category:</label><br>
                   <input type="text" name="GourmetFoodsCategoryID" size="14" />
                   <input type="submit" value="find" />
                   <input type="hidden" name="content" value="displayGourmetFoodsCategory" />
               </form>
           </td>
       </tr>
   <?php
   }
   ?>
</table>
