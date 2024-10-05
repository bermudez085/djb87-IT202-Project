<?php
// Name: Daniel Bermudez
// Date: 10/4/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
session_start();


session_unset();


session_destroy();
header("Location: index.php");
exit();
