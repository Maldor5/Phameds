<?php

      try {

          session_start();

          //include("connection.php");
          include("functions.php");

          $name = set_session_details();
          check_login();

          //$user_data = check_login($con); //checks if user is loged in put on all pages
          require_once('config/connection.php');
          $query = "select * from inventory";
          $result = mysqli_query($conn,$query);

          $totalSum = 0; // Variable to store the total sum for the dashboard

          $rowCount = mysqli_num_rows($result); // count the number of rows

          $totalQuantity = 0; // Variable to store the total quantity dasboard aswell


          while ($row = mysqli_fetch_assoc($result)) {
            $totalQuantity += $row['quantity'];

            // Calculate the total sales
            $multipliedValue = $row['unit_price'] * $row['quantity'];
            $totalSum += $multipliedValue;

          }

          if(isset($_POST["submit"])) {
            $id = $_POST["id"];
            $name = $_POST["name"];
            $expiry_date = $_POST["expiry_date"];
            $unit_price = $_POST["unit_price"];
            $quantity = $_POST["quantity"];
            $category = $_POST["category"];
            $description = $_POST["description"];

            $queryy = "INSERT INTO inventory VALUES('$id','$name','$expiry_date','$unit_price','$quantity','$category','$description')";
            
            
            mysqli_query($conn, $queryy);
                                
          }

          ob_start();

          include 'templates/inventory.html.php';

          $output = ob_get_clean();


      } catch (Exception $e) {

        echo 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();

      }

      include 'templates/base_template.html.php';
?>

