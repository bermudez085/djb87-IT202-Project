
<script language="javascript">
   function listbox_dblclick() {
      //alert(this.value)
      //alert(event.value)
      //alert(document.categories.myselect.value)
      document.categories.displaycategory.click()
   }

   function button_click(target) {
      //alert(document.categories.myselect.value)
      var userConfirmed = true;
      if (target == 1) {
         userConfirmed = confirm("Are you sure you want to remove this category?");
      }
      if (userConfirmed) {
         if (target == 0) categories.action = "index.php?content=displayGourmetFoodsCategory";
         if (target == 1) categories.action = "index.php?content=removeGourmetFoodscategory";
         if (target == 2) categories.action = "index.php?content=updateGourmetFoodsCategory";
      } else {
         alert("Action canceled.");
      }
   }
</script>
<h2>Select Category</h2>
<form name="categories" method="post">
   <select name="GourmetFoodsCategoryID" ondblclick="listbox_dblclick()" size="20">
      <?php
      // Name: Daniel Bermudez
      // Date: 10/19/2024
      // Course Name and Section : IT-202-005
      // Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
      //include("displayGourmetFoodsCategory.inc.php");
      $categories = Category::getCategories();
      foreach ($categories as $category) {
         $GourmetFoodsCategoryID = $category->GourmetFoodsCategoryID;
         $name = $GourmetFoodsCategoryID . " - " . $category->GourmetFoodsCategoryCode . ", " . $category->GourmetFoodsCategoryName;
         echo  "<option value=\"$GourmetFoodsCategoryID\">$name</option>\n";
      }
      ?>
   </select>
   <br>
   <input type="submit" onClick="button_click(0)" name="displaycategory" value="View Category">
   <input type="submit" onClick="button_click(1)" name="deletecategory" value="Delete Category">
   <input type="submit" onClick="button_click(2)" name="updatecategory" value="Update Category">

</form>