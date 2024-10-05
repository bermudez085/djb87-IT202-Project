<?php
// Name: Daniel Bermudez
// Date: 10/4/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
function getDB()
{
  $host = 'sql1.njit.edu';
  $port = 3306;
  $dbname = 'djb87';
  $username = 'djb87';
  $password = 'Superguy576!';
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  try {
    $db = new mysqli($host, $username, $password, $dbname, $port);
    error_log("You are connected to the $host database!");
    return $db;
  } catch (mysqli_sql_exception $e) {
    error_log($e->getMessage(), 0);
    echo $e->getMessage();
  }
}
//getDB();
