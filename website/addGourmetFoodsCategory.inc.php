<?php
// Name: Daniel Bermudez
// Date: 11/1/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu

if (isset($_SESSION['login'])) {
    $GourmetFoodsCategoryID = filter_input(INPUT_POST, 'GourmetFoodsCategoryID', FILTER_VALIDATE_INT);
    //if ((trim($GourmetFoodsCategoryID) == '') || (!is_int($GourmetFoodsCategoryID))) {
    if ($GourmetFoodsCategoryID === false || $GourmetFoodsCategoryID === null) {
        echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";

    } else if (Category::findCategory($GourmetFoodsCategoryID)) {
        echo "<h2>Sorry, An item with the ID #$itemID already exists</h2>\n";

    } else {
        $GourmetFoodsCategoryCode = htmlspecialchars($_POST['GourmetFoodsCategoryCode']);
        $GourmetFoodsCategoryName = htmlspecialchars($_POST['GourmetFoodsCategoryName']);
        $GourmetFoodsCategoryAisleNumber = htmlspecialchars ($_POST['GourmetFoodsCategoryAisleNumber']);
        $category = new Category($GourmetFoodsCategoryID, $GourmetFoodsCategoryCode, $GourmetFoodsCategoryName, $GourmetFoodsCategoryAisleNumber);
        $result = $category->saveCategory();
        if ($result) {
            echo "<h2>New Category #$GourmetFoodsCategoryID successfully added</h2>\n";
            echo "<h2>$GourmetFoodsCategoryName</h2>\n";
        } else {
            echo "<h2>Sorry, there was a problem adding that category</h2>\n";
        }
    }
} else {
    echo "<h2>Please log in first</h2>\n";
}
?>
