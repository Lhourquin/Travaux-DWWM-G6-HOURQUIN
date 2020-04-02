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

--ex4
SELECT prod.name,
		prod.model_year,
        prod.price,
		marque.brand_name 
FROM products AS prod, categories AS cat, brands AS marque
WHERE marque.brand_name LIKE 'H%'

--ex5
SELECT prod.name,
		prod.model_year,
        prod.price
FROM products AS prod, categories AS cat, brands AS marque
WHERE  prod.name LIKE '%trek%'