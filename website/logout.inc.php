<?php
// Name: Daniel Bermudez
// Date: 10/4/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
if (isset($_SESSION['login'])) {
  unset($_SESSION['login']);
}
if (headers_sent()) {
  echo "Click <a href=\"index.php?content=logout\"><strong>here</strong></a> to logout.";
} else {
  header("Location: index.php");
}
?>
