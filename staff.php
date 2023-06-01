<?php

      try {

        session_start();

        include("functions.php");

        $session_details = set_session_details();

        check_login();

        //connection
        require_once('config/connection.php');

        $query = "select * from staff";
        
        $result = mysqli_query($conn,$query);

        ob_start();

        include 'templates/staff.html.php';

        $output = ob_get_clean();

      } catch (Exception $e) {

        echo 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();

      }

      include 'templates/base_template.html.php';
  
?>