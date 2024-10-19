<?php
// Name: Daniel Bermudez
// Date: 10/19/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
require_once('database.php');

class Product
{
    public $GourmetFoodsProductID;
    public $GourmetFoodsProductCode;
    public $GourmetFoodsProductName;
    public $GourmetFoodsdescription;
    public $GourmetFoodsProductOutOfStock;
    public $GourmetFoodsCategoryID;
    public $GourmetFoods_WholesalePrice;
    public $GourmetFoodsListPrice;

    function __construct(
        $GourmetFoodsProductID,
        $GourmetFoodsProductCode,
        $GourmetFoodsProductName,
        $GourmetFoodsdescription,
        $GourmetFoodsProductOutOfStock,
        $GourmetFoodsCategoryID,
        $GourmetFoods_WholesalePrice,
        $GourmetFoodsListPrice
    ) {
        $this->GourmetFoodsProductID = $GourmetFoodsProductID;
        $this->GourmetFoodsProductCode = $GourmetFoodsProductCode;
        $this->GourmetFoodsProductName = $GourmetFoodsProductName;
        $this->GourmetFoodsdescription = $GourmetFoodsdescription;
        $this->GourmetFoodsProductOutOfStock = $GourmetFoodsProductOutOfStock;
        $this->GourmetFoodsCategoryID = $GourmetFoodsCategoryID;
        $this->GourmetFoods_WholesalePrice = $GourmetFoods_WholesalePrice;
        $this->GourmetFoodsListPrice = $GourmetFoodsListPrice;
    }

    function __toString()
    {
        return "<h2>Item: $this->GourmetFoodsProductID</h2>" .
               "<h2>Name: $this->GourmetFoodsProductName</h2>\n" .
               "<h2>Category ID: $this->GourmetFoodsCategoryID at $this->GourmetFoodsListPrice</h2>\n";
    }

    function saveProduct()
    {
        $db = getDB();
        $query = "INSERT INTO GourmetFoodsProducts 
                  (GourmetFoodsProductID, GourmetFoodsProductCode, GourmetFoodsProductName, 
                   GourmetFoodsdescription, GourmetFoodsProductOutOfStock, 
                   GourmetFoodsCategoryID, GourmetFoods_WholesalePrice, GourmetFoodsListPrice, DateCreated) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, now())";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "issssidd",
            $this->GourmetFoodsProductID,
            $this->GourmetFoodsProductCode,
            $this->GourmetFoodsProductName,
            $this->GourmetFoodsdescription,
            $this->GourmetFoodsProductOutOfStock,
            $this->GourmetFoodsCategoryID,
            $this->GourmetFoods_WholesalePrice,
            $this->GourmetFoodsListPrice
        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }

    static function getProducts()
    {
        $db = getDB();
        $query = "SELECT * FROM GourmetFoodsProducts";
        $result = $db->query($query);
        if (mysqli_num_rows($result) > 0) {
            $products = array();
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $product = new Product(
                    $row['GourmetFoodsProductID'],
                    $row['GourmetFoodsProductCode'],
                    $row['GourmetFoodsProductName'],
                    $row['GourmetFoodsdescription'],  
                    $row['GourmetFoodsProductOutOfStock'],
                    $row['GourmetFoodsCategoryID'],
                    $row['GourmetFoods_WholesalePrice'],
                    $row['GourmetFoodsListPrice']
                );
                array_push($products, $product);
            }
            $db->close();
            return $products;
        } else {
            $db->close();
            return NULL;
        }
    }

    static function findProduct($productID)
    {
        $db = getDB();
        $query = "SELECT * FROM GourmetFoodsProducts WHERE GourmetFoodsProductID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $productID);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if ($row) {
            $product = new Product(
                $row['GourmetFoodsProductID'],
                $row['GourmetFoodsProductCode'],
                $row['GourmetFoodsProductName'],
                $row['GourmetFoodsdescription'], 
                $row['GourmetFoodsProductOutOfStock'],
                $row['GourmetFoodsCategoryID'],
                $row['GourmetFoods_WholesalePrice'],
                $row['GourmetFoodsListPrice']
            );
            $db->close();
            return $product;
        } else {
            $db->close();
            return NULL;
        }
    }

    function updateProduct()
    {
        $db = getDB();
        $query = "UPDATE GourmetFoodsProducts SET 
            GourmetFoodsProductCode = ?, 
            GourmetFoodsProductName = ?, 
            GourmetFoodsdescription = ?, 
            GourmetFoodsCategoryID = ?, 
            GourmetFoodsListPrice = ?, 
            GourmetFoods_WholesalePrice = ?, 
            GourmetFoodsProductOutOfStock = ? 
            WHERE GourmetFoodsProductID = ?";

        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "ssiddssi",
            $this->GourmetFoodsProductCode,
            $this->GourmetFoodsProductName,
            $this->GourmetFoodsdescription,
            $this->GourmetFoodsCategoryID,
            $this->GourmetFoodsListPrice,
            $this->GourmetFoods_WholesalePrice,
            $this->GourmetFoodsProductOutOfStock,
            $this->GourmetFoodsProductID
        );

        $result = $stmt->execute();
        $db->close();
        return $result;
    }

    function removeProduct()
    {
        $db = getDB();
        $query = "DELETE FROM GourmetFoodsProducts WHERE GourmetFoodsProductID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $this->GourmetFoodsProductID);
        $result = $stmt->execute();
        $db->close();
        return $result;
    }
}
?>
