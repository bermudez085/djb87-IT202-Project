-- Name: Daniel Bermudez
--Date: 10/19/2024
-- Course Name and Section : IT-202-005
-- Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
CREATE TABLE GourmetFoodsCategories (
 GourmetFoodsCategoryID       INT(11)        NOT NULL,
 GourmetFoodsCategoryCode     VARCHAR(10)    NOT NULL 
  UNIQUE,
 GourmetFoodsCategoryName     VARCHAR(255)   NOT NULL,
 GourmetFoodsCategoryAisleNumber      INT(2)      NOT NULL,
 DateCreated               DATETIME       NOT NULL,
 PRIMARY KEY ( GourmetFoodsCategoryID )
);


CREATE TABLE GourmetFoodsProducts (
 GourmetFoodsProductID        INT(11)        NOT NULL,
 GourmetFoodsProductCode      VARCHAR(10)    NOT NULL   UNIQUE,
 GourmetFoodsProductName      VARCHAR(255)   NOT NULL,
 GourmetFoodsdescription      TEXT           NOT NULL,
 GourmetFoodsProductOutOfStock      VARCHAR(3)      NOT NULL,
 GourmetFoodsCategoryID       INT(11)        NOT NULL,
 GourmetFoods_WholesalePrice      DECIMAL(10,2)  NOT NULL,
 GourmetFoodsListPrice           DECIMAL(10,2)  NOT NULL,
 DateCreated               DATETIME       NOT NULL,
 PRIMARY KEY ( GourmetFoodsProductID )
);

ALTER TABLE GourmetFoodsCategories
RENAME COLUMN GourmetFoodsCategoryServingSize TO GourmetFoodsCategoryAisleNumber;

INSERT INTO GourmetFoodsCategories
(GourmetFoodsCategoryID, GourmetFoodsCategoryCode, GourmetFoodsCategoryName, GourmetFoodsCategoryAisleNumber, DateCreated)
VALUES
(100, 'ACB', ' Artisinal Chocolate Box', 1,  NOW());
INSERT INTO GourmetFoodsCategories
(GourmetFoodsCategoryID, GourmetFoodsCategoryCode, GourmetFoodsCategoryName, GourmetFoodsCategoryAisleNumber, DateCreated)
VALUES
(200, 'GPS', 'Gourmet Popcorn Sampler', 10 , NOW());

INSERT INTO GourmetFoodsCategories
(GourmetFoodsCategoryID, GourmetFoodsCategoryCode, GourmetFoodsCategoryName, GourmetFoodsCategoryAisleNumber, DateCreated)
VALUES
(300, 'TOO', 'Truffle-Infused Olive Oil', 20,  NOW());

INSERT INTO GourmetFoodsCategories
(GourmetFoodsCategoryID, GourmetFoodsCategoryCode, GourmetFoodsCategoryName, GourmetFoodsCategoryAisleNumber, DateCreated)
VALUES
(400, 'OJS', 'Organic Fruit Jam Set', 30,  NOW());

INSERT INTO GourmetFoodsCategories
(GourmetFoodsCategoryID, GourmetFoodsCategoryCode, GourmetFoodsCategoryName, GourmetFoodsCategoryAisleNumber, DateCreated)
VALUES
(500, 'SCB', 'Specialty Coffee Beans', 40,  NOW());


INSERT INTO GourmetFoodsProducts
(GourmetFoodsProductID, GourmetFoodsProductCode, GourmetFoodsProductName, GourmetFoodsDescription, GourmetFoodsProductOutOfStock, GourmetFoodsCategoryID, GourmetFoods_WholesalePrice, GourmetFoodsListPrice, DateCreated)
VALUES
(1000, 'DCC', 'Dark Chocolate Sea Salt Caramels','Rich dark chocolate covers soft caramel with a hint of sea salt. A perfect balance of sweet and salty in each bite.', 'YES' ,100, 10.00, 21.99, NOW());

INSERT INTO GourmetFoodsProducts
(GourmetFoodsProductID, GourmetFoodsProductCode, GourmetFoodsProductName, GourmetFoodsDescription, GourmetFoodsProductOutOfStock, GourmetFoodsCategoryID, GourmetFoods_WholesalePrice, GourmetFoodsListPrice, DateCreated)
VALUES
(2000, 'WCP', 'White Cheddar Truffle Popcorn','Light, crunchy popcorn coated with sharp white cheddar and a touch of truffle. A savory treat for gourmet snack lovers.', 'NO' ,200, 4.99, 9.99, NOW());

INSERT INTO GourmetFoodsProducts
(GourmetFoodsProductID, GourmetFoodsProductCode, GourmetFoodsProductName, GourmetFoodsDescription, GourmetFoodsProductOutOfStock, GourmetFoodsCategoryID, GourmetFoods_WholesalePrice, GourmetFoodsListPrice, DateCreated)
VALUES
(3000, 'BTV',  'Black Truffle Extra Virgin Olive Oil','Smooth olive oil infused with earthy black truffle flavor. Ideal for drizzling over pasta or gourmet dishes.', 'NO' ,300, 12.00, 18.99, NOW());

INSERT INTO GourmetFoodsProducts
(GourmetFoodsProductID, GourmetFoodsProductCode, GourmetFoodsProductName, GourmetFoodsDescription, GourmetFoodsProductOutOfStock, GourmetFoodsCategoryID, GourmetFoods_WholesalePrice, GourmetFoodsListPrice, DateCreated)
VALUES
(4000, 'ORB', 'Organic Raspberry & Blueberry Jam Duo','Two organic fruit jams packed with natural berry sweetness. Great for spreading on toast or adding to desserts.', 'NO' ,400, 8.99, 19.99, NOW());

INSERT INTO GourmetFoodsProducts
(GourmetFoodsProductID, GourmetFoodsProductCode, GourmetFoodsProductName, GourmetFoodsDescription, GourmetFoodsProductOutOfStock, GourmetFoodsCategoryID, GourmetFoods_WholesalePrice, GourmetFoodsListPrice, DateCreated)
VALUES
(5000, 'SEC','Single-Origin Ethiopian Coffee Beans', 'Premium coffee beans with bright, floral notes and a hint of citrus. Perfect for brewing a rich, aromatic cup.', 'NO' ,500, 4.00, 14.99, NOW());

Select * from `GourmetFoodsProducts`

INSERT INTO GourmetFoodsProducts
(GourmetFoodsProductID, GourmetFoodsProductCode, GourmetFoodsProductName, GourmetFoodsDescription, GourmetFoodsProductOutOfStock, GourmetFoodsCategoryID, GourmetFoods_WholesalePrice, GourmetFoodsListPrice, DateCreated)
VALUES
(6000, 'DMC', 'Dark Mint Chocolate', 'Indulge in rich dark chocolate infused with fresh mint. A refreshing treat that melts in your mouth.', 'NO', 100, 5.00, 12.99, NOW()),
(7000, 'CAC', 'Caramel Chocolate Bites', 'Smooth caramel surrounded by creamy chocolate. Perfect for satisfying your sweet tooth.', 'NO', 100, 8.00, 15.99, NOW()),
(8000, 'FNC', 'Fruit and Nut Chocolate Bark', 'A delightful mix of fruits and nuts covered in rich chocolate. A healthy yet indulgent treat.', 'NO', 100, 7.50, 14.99, NOW());

INSERT INTO GourmetFoodsProducts
(GourmetFoodsProductID, GourmetFoodsProductCode, GourmetFoodsProductName, GourmetFoodsDescription, GourmetFoodsProductOutOfStock, GourmetFoodsCategoryID, GourmetFoods_WholesalePrice, GourmetFoodsListPrice, DateCreated)
VALUES
(9000, 'PPC', 'Popcorn with Caramel Drizzle', 'Delicious popcorn drizzled with sweet caramel. Perfect for parties or a movie night snack.', 'NO', 200, 3.00, 6.99, NOW()),
(10000, 'CCP', 'Cheddar Cheese Popcorn', 'Savory popcorn coated with sharp cheddar cheese. A classic favorite for cheese lovers.', 'NO', 200, 2.50, 5.99, NOW()),
(11000, 'BBP', 'Buffalo Ranch Popcorn', 'A spicy and tangy flavor combination that will elevate your snacking experience.', 'NO', 200, 3.50, 7.99, NOW());

INSERT INTO GourmetFoodsProducts
(GourmetFoodsProductID, GourmetFoodsProductCode, GourmetFoodsProductName, GourmetFoodsDescription, GourmetFoodsProductOutOfStock, GourmetFoodsCategoryID, GourmetFoods_WholesalePrice, GourmetFoodsListPrice, DateCreated)
VALUES
(12000, 'BTO', 'Black Truffle Oil', 'Premium oil infused with black truffle for a gourmet touch to any dish.', 'NO', 300, 15.00, 25.99, NOW()),
(13000, 'TTO', 'Truffle Salt', 'A savory seasoning that enhances the flavor of meats, vegetables, and pasta.', 'NO', 300, 8.00, 17.99, NOW()),
(14000, 'TPO', 'Truffle Popcorn', 'Popcorn drizzled with truffle oil for an elevated snacking experience.', 'NO', 300, 5.50, 11.99, NOW());

INSERT INTO GourmetFoodsProducts
(GourmetFoodsProductID, GourmetFoodsProductCode, GourmetFoodsProductName, GourmetFoodsDescription, GourmetFoodsProductOutOfStock, GourmetFoodsCategoryID, GourmetFoods_WholesalePrice, GourmetFoodsListPrice, DateCreated)
VALUES
(15000, 'JAR', 'Organic Strawberry Jam', 'Sweet organic strawberries make this jam perfect for spreading on toast or using in desserts.', 'NO', 400, 4.00, 9.99, NOW()),
(16000, 'JBL', 'Organic Blueberry Jam', 'Rich and flavorful blueberry jam made from organic berries.', 'NO', 400, 4.50, 10.99, NOW()),
(17000, 'JRM', 'Organic Raspberry Jam', 'Delicious raspberry jam that adds a burst of flavor to any dish.', 'NO', 400, 4.50, 10.99, NOW());

INSERT INTO GourmetFoodsProducts
(GourmetFoodsProductID, GourmetFoodsProductCode, GourmetFoodsProductName, GourmetFoodsDescription, GourmetFoodsProductOutOfStock, GourmetFoodsCategoryID, GourmetFoods_WholesalePrice, GourmetFoodsListPrice, DateCreated)
VALUES
(18000, 'ECO', 'Ethiopian Coffee Organic', 'Rich and flavorful coffee sourced from the finest Ethiopian beans.', 'NO', 500, 6.00, 14.99, NOW()),
(19000, 'DRC', 'Dark Roast Coffee', 'A deep, robust blend perfect for coffee lovers who enjoy a strong flavor.', 'NO', 500, 5.00, 12.99, NOW()),
(20000, 'LAC', 'Light Roast Coffee', 'Smooth and mellow coffee that offers a balanced flavor with a hint of sweetness.', 'NO', 500, 4.50, 10.99, NOW());
