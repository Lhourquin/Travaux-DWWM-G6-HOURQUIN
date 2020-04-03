--ex 1
SELECT prod.name,
		prod.model_year,
		cat.nameCat,
		marque.brand_name 
FROM products AS prod, categories AS cat, brands AS marque

--ex2
SELECT prod.name,
		prod.model_year,
        prod.price,
		cat.nameCat,
		marque.brand_name 
FROM products AS prod, categories AS cat, brands AS marque
WHERE cat.nameCat = 'Electric Bikes'
AND marque.brand_name = 'Haro'
-- corection ex 2
--edwina 
SELECT name, model_year, price,((price*20)/100) AS TVA,(price+((price*20)/100)) AS TTC,nameCat, brand_name
FROM products, brands,categories
WHERE category_id = idCat
AND products.brand_id = brands.brand_id
AND brand_name = 'Trek'
AND nameCat = 'Electric Bikes'
-- remi
SELECT prod.name AS Nom, 
       prod.model_year AS Année, 
    prod.price AS PrixHT, 
       prod.price / (100 * 20) AS Montant20prcent, 
       ROUND(prod.price + (prod.price / (100 * 20)), 2) AS prixTTC,   
       cat.nameCat AS typeVélo,  
       brands.brand_name AS Marque
FROM products AS prod, categories AS cat, brands
WHERE cat.idCat = 5
AND brands.brand_id = 2
-- marc
SELECT     products.name, 
        products.model_year, 
        categories.nameCat, 
        brands.brand_name, 
        products.price AS PrixHT, 
        CAST(products.price*0.2 as DECIMAL(9,2)) AS TVA, 
        CAST(products.price*1.2 as DECIMAL(9,2)) AS PrixTTC
FROM products
INNER JOIN categories ON products.category_id = categories.idCat
INNER JOIN brands ON products.brand_id = brands.brand_id

--ex3
SELECT prod.name,
		prod.model_year,
        prod.price,
		cat.nameCat,
		marque.brand_name 
FROM products AS prod, categories AS cat, brands AS marque
WHERE cat.nameCat = 'Electric Bikes'
AND marque.brand_name = 'Haro'
AND prod.price <= 1500
AND prod.price >= 500
--correction exo 3

--marc
SELECT *
FROM products
WHERE products.price BETWEEN 500 AND 1500

--ex4
SELECT prod.name,
		prod.model_year,
        prod.price,
		marque.brand_name 
FROM products AS prod, categories AS cat, brands AS marque
WHERE marque.brand_name LIKE 'H%'

--corection romu
SELECT products.name, products.model_year, products.price, brands.brand_name
FROM products
INNER JOIN brands ON brands.brand_id = products.brand_id
WHERE brands.brand_name LIKE "H%"

--correction romu 2
SELECT products.name, products.model_year, products.price, brands.brand_name
FROM brands
INNER JOIN products ON products.brand_id = brands.brand_id
WHERE brands.brand_name LIKE "H%"

--corection marc
SELECT  products.name,
        products.model_year,
        products.price,
        brands.brand_name
 FROM     products
 INNER JOIN brands ON products.brand_id = brands.brand_id
 AND brands.brand_name LIKE 'H%'

--ex5
SELECT prod.name,
		prod.model_year,
        prod.price
FROM products AS prod, categories AS cat, brands AS marque
WHERE  prod.name LIKE '%trek%'
--corection  marc
SELECT     products.name, 
        products.model_year, 
        products.price AS PrixHT
FROM products
WHERE products.name LIKE "%lce%"

--code pour inseret marc
INSERT INTO products (products.name, products.brand_id, products.category_id, products.model_year, products.price)
VALUES ('Iphone 11', (SELECT brands.brand_id FROM brands WHERE brands.brand_name = 'Iphone') , (SELECT categories.idCat FROM categories WHERE categories.nameCat = 'Appel') , '2021', 1234)

-- code update
UPDATE table
SET colonne_1 = 'valeur 1', colonne_2 = 'valeur 2', colonne_3 = 'valeur 3'
WHERE condition

--code delete

DELETE FROM table
WHERE condition

-- ex 6 correction
--remi
DELETE FROM products
WHERE products.brand_id = (SELECT brands.brand_id FROM brands WHERE brands.brand_name="Trek")
-- audrey
DELETE
FROM products
WHERE products.brand_id= (SELECT brands.brand_id FROM brands WHERE brands.brand_name="Trek");
-- romu
DELETE products.*
FROM products
INNER JOIN brands ON brands.brand_id = products.brand_id
WHERE brands.brand_name = "Trek"

--EXERCISE 7
--correction romu
DELETE products.*
FROM products
INNER JOIN categories ON categories.idCat = products.category_id
WHERE categories.nameCat = "Mountain Bikes"

--- exo9
--correction romu
INSERT INTO categories (categories.idCat, categories.nameCat) VALUES(null, "Roller skates")
--correction remo
INSERT INTO categories (categories.nameCat)
VALUES ('Roller skates')
--corection audrey
INSERT INTO categories (nameCat)
VALUES ('Roller skates')

--exo 10 
--correction romu
INSERT INTO products (products.id, products.name, products.brand_id, products.category_id, products.model_year, products.price) 
VALUES (null,
    "Roller skates cool", 
    (SELECT brands.brand_id FROM brands WHERE brands.brand_name = 'Haro'),
    (SELECT categories.idCat FROM categories WHERE categories.nameCat = 'Roller skates'),
    "2020", 
    "258"
)
--correction remi 
INSERT INTO products (products.name, products.brand_id, products.category_id, products.model_year, products.price)
VALUES ('roller skates cool', (SELECT brands.brand_id FROM brands WHERE brands.brand_name = 'Haro'), (SELECT categories.idCat FROM categories WHERE categories.nameCat = 'Roller skates'), '2020', 258)

-- exo update
--edwina correction
update products 
set price = 1499
WHERE products.id ='9'
--remi correction
UPDATE products
SET products.price = '1499'
WHERE products.id = 9
--correection audery
UPDATE products
SET products.price=1499 WHERE products.id=9
--correction loic
UPDATE products
SET price = 1499
WHERE products.id = 9