<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MySQL Examples</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <div class="container">

  <?php
    /************* MySQL SELECT Statement *********/
    // Example-01: The following SQL statement selects the "CustomerName", "City", and "Country" columns from the "Customers" table:
    SELECT CustomerName, City, County FROM Customers;

    // Example-02: The following SQL statement selects ALL the columns from the "Customers" table:
    SELECT * FROM Customers;

    // Example-03: The following SQL statement selects all (including the duplicates) values from the "Country" column in the "Customers" table:
    SELECT Country FROM Customers;

    // Example-04: The following SQL statement selects only the DISTINCT values from the "Country" column in the "Customers" table:
    SELECT DISTINCT Country FROM Customers;

    // Example-05: The following SQL statement counts and returns the number of different (distinct) countries in the "Customers" table:
    SELECT COUNT(DISTINCT Country) FROM Customers;


    /************* MySQL WHERE Clause *********/
    // Example-06: WHERE Syntax
    SELECT column1, column2, ...
    FROM table_name
    WHERE condition;

    // Example-07:The following SQL statement selects all the customers from "Mexico":
    SELECT * 
    FROM Customers
    WHERE Country = 'Mexico';

    // Example-08: SQL requires single quotes around text values (most database systems will also allow double quotes).However, numeric fields should not be enclosed in quotes:
    SELECT *
    FROM Customers
    WHERE CustomerID = 10;

    // Example-09: The following SQL statement selects ALL the columns from the "Products" table where price is greater than 30:
    SELECT * 
    FROM Products
    WHERE Price > 30;

    // Example-10: The following SQL statement selects ALL the columns from the "Products" table where price is less than 30:
    SELECT * 
    FROM Products
    WHERE Price < 30;

     // Example-11: The following SQL statement selects ALL the columns from the "Products" table where price is greater than or equal to 30:
     SELECT * 
     FROM Products
     WHERE Price >= 30;

     // Example-12: The following SQL statement selects ALL the columns from the "Products" table where price is less than or equal to  30:
    SELECT * 
    FROM Products
    WHERE Price <= 30;

     // Example-13: The following SQL statement selects ALL the columns from the "Products" table where price is not equal to  30:
    SELECT * 
    FROM Products
    WHERE Price <> 30;

    // Example-14: The following SQL statement selects ALL the columns from the "Products" table where price is between 50 and 80:
     SELECT *
     FROM Products
     WHERE price BETWEEN 50 AND 80; 

     // Example-15:The following SQL statement selects ALL the columns from the "Customers" table where City name starts with s:
     SELECT *
     FROM Customers
     WHERE City LIKE 's%';

     // Example-16:The following SQL statement selects ALL the columns from the "Customers" table where City names are London, Paris:
      SELECT *
      FROM Customers
      WHERE City IN ('London', 'Paris');




      /************* MySQL AND, OR and NOT Operators *********/
  
  
  ?>

  </div>
   
  





















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>