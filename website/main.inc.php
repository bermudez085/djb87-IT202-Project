<?php
// Name: Daniel Bermudez
// Date: 10/4/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
if (!isset($_SESSION['login'])) {
?>
<style>
 form[name="login"] {
   display: grid;
   grid-template-columns: 100px 1fr;
   gap: 10px 5px;
   align-items: center;
   max-width: 300px;
 }
 form[name="login"] label {
   text-align: right;
   padding-right: 5px;
 }
 form[name="login"] input[type="text"],
 form[name="login"] input[type="password"] {
   width: 100%;
 }
 form[name="login"] input[type="submit"] {
   grid-column: 2;
   justify-self: start;
 }
</style>

  <h2>Please log into Gourmet Foods and Snacks account</h2><br>
  <form name="login" action="index.php" method="post">
    <label>Email:</label>
    <input type="text" name="emailAddress" size="20">
    <!-- <br> -->
   <!-- <br> -->

    <label>Password:</label>
    <input type="password" name="password" size="20">
    <!-- <br> -->
   <!-- <br> -->

    <input type="submit" value="Login">
    <input type="hidden" name="content" value="validate">
  </form>
<?php
} else {
  echo "<h2>Welcome to your Gourmet Foods and Snacks account, {$_SESSION['login']}  {$_SESSION['pronouns']} </h2>";
?>
  <br><br>
  <p>This program tracks category and item inventory</p>
  <p>Please use the links in the navigation window</p>
  <p>Please DO NOT use the browser navigation buttons!</p>
  <a href="index.php?content=logout"><strong>Logout</strong></a>
<?php //need
}

?>