<?php

      try {

      session_start();

      include("functions.php");

      $session_details = set_session_details();

      check_login();

      include ('config/connection.php');
      $query = "select * from sales";
      $result = mysqli_query($conn,$query);

      $totalSum = 0; // Variable to store the total sum


      $rowCount = mysqli_num_rows($result); // Get the number of rows


      $totalQuantity = 0; // Variable to store the total quantity

      while ($row = mysqli_fetch_assoc($result)) {
        $totalQuantity += $row['quantity'];

        // Calculate the total sales
        $multipliedValue = $row['unit_price'] * $row['quantity'];
        $totalSum += $multipliedValue;

        // Display the other table data
        // ...
      }

      if(isset($_POST["submit"]))
      {
        $id = $_POST["id"];
        $date = $_POST["date"];
        $name = $_POST["name"];
        $unit_price = $_POST["unit_price"];
        $quantity = $_POST["quantity"];
        
        $queryy = "INSERT INTO sales VALUES('$id','$date','$name','$unit_price','$quantity')";
        
        
        mysqli_query($conn, $queryy);
        
      }

      ob_start();

      include 'templates/sales.html.php';

      $output = ob_get_clean();


      } catch (Exception $e) {

      echo 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();

      }

      include 'templates/base_template.html.php';
?>

 

 

