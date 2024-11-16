<?php
// Name: Daniel Bermudez
// Date: 10/4/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
require_once('database.php');
$emailAddress = htmlspecialchars($_POST['emailAddress']);
$password = $_POST['password'];
if (filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
   $query = "SELECT firstName, lastName, pronouns FROM GourmetFoodsManagers " .
      "WHERE emailAddress = ? AND password = SHA2(?,256)";
   $db = getDB();
   $stmt = $db->prepare($query);
   $stmt->bind_param("ss", $emailAddress, $password);
   $stmt->execute();
   $stmt->bind_result($firstName, $lastName, $pronouns);
   $fetched = $stmt->fetch();
   $name = "$firstName $lastName";
   if ($fetched && isset($name)) {
      echo "<h2>Welcome to Inventory Helper, $name</h2>\n";
      $_SESSION['login'] = $name;
      $_SESSION['emailAddress'] = $emailAddress;
      $_SESSION['firstName'] = $firstName;
      $_SESSION['lastName'] = $lastName;
      $_SESSION['pronouns'] = $pronouns;
      header("Location: index.php");
      exit();
   } else {
      echo "<h2>Sorry, login incorrect for Gourmet Foods and Snacks</h2>\n";
      echo "<a href=\"index.php\">Please try again</a>\n";
   }
} else {
   echo "<h2>Please enter a valid email address</h2>\n";
   echo "<a href=\"index.php\">Please try again</a>\n";
}
?>