SELECT orders.id, orders.products_id, SUM(orders.quantity) AS ProductoVendido FROM orders GROUP BY orders.products_id ORDER BY SUM(orders.quantity) DESC LIMIT 0,1
SELECT products.id, products.name, products.stock, SUM(products.stock) AS ProductoStock FROM products GROUP BY products.stock ORDER BY SUM(products.stock) DESC LIMIT 0,1
