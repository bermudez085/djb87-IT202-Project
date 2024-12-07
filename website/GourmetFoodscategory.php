<?php
// Name: Daniel Bermudez
// Date: 10/19/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
require_once('database.php');
class Category
{
    public $GourmetFoodsCategoryID;
    public $GourmetFoodsCategoryCode;
    public $GourmetFoodsCategoryName;
    public $GourmetFoodsCategoryAisleNumber;
    function __construct($GourmetFoodsCategoryID, $GourmetFoodsCategoryCode, $GourmetFoodsCategoryName, $GourmetFoodsCategoryAisleNumber)
    {
        $this->GourmetFoodsCategoryID = $GourmetFoodsCategoryID;
        $this->GourmetFoodsCategoryCode = $GourmetFoodsCategoryCode;
        $this->GourmetFoodsCategoryName = $GourmetFoodsCategoryName;
        $this->GourmetFoodsCategoryAisleNumber = $GourmetFoodsCategoryAisleNumber;
    }
    function __toString()
    {
        $output = "<h2>Category Number: $this->GourmetFoodsCategoryID</h2>\n" .
            "<h2>$this->GourmetFoodsCategoryCode, $this->GourmetFoodsCategoryName, $this->GourmetFoodsCategoryAisleNumber</h2>\n";
        return $output;
    }
    function saveCategory()
    {
        $db = getDB();
        $query = "INSERT INTO GourmetFoodsCategories (GourmetFoodsCategoryID, GourmetFoodsCategoryCode, GourmetFoodsCategoryName, GourmetFoodsCategoryAisleNumber, DateCreated) VALUES (?, ?, ?, ?, now())";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "issi",
            $this->GourmetFoodsCategoryID,
            $this->GourmetFoodsCategoryCode,
            $this->GourmetFoodsCategoryName,
            $this->GourmetFoodsCategoryAisleNumber,

        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }
    static function getCategories()
    {
        $db = getDB();
        $query = "SELECT * FROM GourmetFoodsCategories";
        $result = $db->query($query);
        if (mysqli_num_rows($result) > 0) {
            $categories = array();
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $category = new Category(
                    $row['GourmetFoodsCategoryID'],
                    $row['GourmetFoodsCategoryCode'],
                    $row['GourmetFoodsCategoryName'],
                    $row['GourmetFoodsCategoryAisleNumber']
                );
                array_push($categories, $category);
                unset($category);
            }
            $db->close();
            return $categories;
        } else {
            $db->close();
            return NULL;
        }
    }
    static function findCategory($categoryID)
    {
        $db = getDB();
        $query = "SELECT * FROM GourmetFoodsCategories WHERE GourmetFoodsCategoryID  = " . $categoryID;
        $result = $db->query($query);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if ($row) {
            $category = new Category(
                $row['GourmetFoodsCategoryID'],
                $row['GourmetFoodsCategoryCode'],
                $row['GourmetFoodsCategoryName'],
                $row['GourmetFoodsCategoryAisleNumber']
            );
            $db->close();
            return $category;
        } else {
            $db->close();
            return NULL;
        }
    }
    function updateCategory()
    {
        $db = getDB();
        $query = "UPDATE GourmetFoodsCategories SET GourmetFoodsCategoryCode = ?, GourmetFoodsCategoryName = ?, GourmetFoodsCategoryAisleNumber = ? WHERE GourmetFoodsCategoryID = $this->GourmetFoodsCategoryID";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "ssi",
            $this->GourmetFoodsCategoryCode,
            $this->GourmetFoodsCategoryName,
            $this->GourmetFoodsCategoryAisleNumber
        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }
    function removeCategory()
    {
        $db = getDB();
        $query = "DELETE FROM GourmetFoodsCategories WHERE GourmetFoodsCategoryID  = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $this->GourmetFoodsCategoryID);
        $result = $stmt->execute();
        $db->close();
        return $result;
    }
    static function getTotalCategories()
{
   $db = getDB();
   $query = "SELECT count(GourmetFoodsCategoryID) FROM GourmetFoodsCategories";
   $result = $db->query($query);
   $row = $result->fetch_array();
   if ($row) {
       return $row[0];
   } else {
       return NULL;
   }
}

}
