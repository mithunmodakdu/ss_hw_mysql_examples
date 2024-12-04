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
  
  
  ?>

  </div>
   
  





















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>