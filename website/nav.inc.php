<table width="100%" cellpadding="3">
   <?php
   // Name: Daniel Bermudez
// Date: 11/1/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
   if (!isset($_SESSION['login'])) {
   ?>
       <tr>
              <!-- <hr /> -->
           </td>
       </tr>
   <?php
   } else {
    echo "<td><h3>Welcome, {$_SESSION['login']}</h3></td>\n";
?>
    <tr>
        <td>
            <img src="images/home.png" alt="Home Icon" width="12" height="12">&nbsp;<a href="index.php"><strong>Home</strong></a></td>
    </tr>
    <tr>
        <td><img src="images/lines.png" alt="Categories Icon" width="12" height="12">&nbsp;
            <strong>Categories</strong></td>
    </tr>
    <tr>
           <td>
            &nbsp;&nbsp;&nbsp;<a href="index.php?content=listGourmetFoodscategories">
                   <strong>List Categories</strong></a></td>
       </tr>
       <tr>
           <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newGourmetFoodsCategory">
                   <strong>Add New Category</strong></a></td>
       </tr>
       <tr>
           <td><img src="images/box.png" alt="Products Icon" width="12" height="12">&nbsp;
           <strong>Products</strong></td>
       </tr>
       <tr>
           <td>
            &nbsp;&nbsp;&nbsp;<a href="index.php?content=listGourmetFoodsProduct">
                   <strong>List Products</strong></a></td>
       </tr>
       <tr>
           <td>

            &nbsp;&nbsp;&nbsp;<a href="index.php?content=newGourmetFoodsProduct">
                   <strong>Add New Product</strong></a></td>
       </tr>
       <tr>
           <td>
               <hr />
           </td>
       </tr>
       <tr>
           <td>
           <img src="images/logout.png" alt="Logout Icon" width="12" height="12"></a>&nbsp;
           <a href="index.php?content=logout">
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
