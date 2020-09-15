## AVALIAÇÃO INFNET 15/09/2020

#### 2. Modelagem de dados - Pasta EX2
##### https://github.com/tacito-faeterj/infnet/tree/master/Ex2

#### 5. Consulta a banco de dados
##### Resposta:
###### SELECT c.* FROM Customers AS c JOIN Orders as o ON c.CustomerID = o.CustomerID JOIN OrderDetails as od ON o.OrderID = od.OrderID JOIN Products as p ON od.ProductID = p.ProductID JOIN Suppliers as s ON p.SupplierID = s.SupplierID WHERE s.Country = 'Brazil'
