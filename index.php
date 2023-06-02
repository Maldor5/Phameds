<?php
    try{

        session_start();

        // Check if the staff member is already logged in
        if (isset($_SESSION['id'])) {
            header('Location: ./Inventory.php');
            exit;
        }
  
        include_once 'templates/login.html';
  
        // Check if the login form was submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Get the username and password from the form
            $username = $_POST['user_name'];
            $password = $_POST['password'];
            $_SESSION['username'] = $username;
  
            // Validate the username and password (you may need to modify this part)
            if (!empty($username) && !empty($password)) {
                // Include the connection file
                require_once 'config/connection.php';
  
                if (!$conn) {
                    die('Database connection failed: ' . mysqli_connect_error());
                }
  
                // Prepare the SQL statement to check the username and password
                $query = "SELECT id, role FROM staff WHERE user_name = ? AND password = ?";
                $stmt = mysqli_prepare($conn, $query);
                mysqli_stmt_bind_param($stmt, 'ss', $username, $password);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_bind_result($stmt, $staffId, $role);
                mysqli_stmt_fetch($stmt);
                mysqli_stmt_close($stmt);
  
                // Close the database connection
                mysqli_close($conn);
  
                // Check if the login credentials are correct
                if ($staffId) {
                    // Set the staff ID in the session
                    $_SESSION['id'] = $staffId;
                    $_SESSION['role'] = $role;
  
                    // Redirect to the protected page
                    // header('Location: Inventory.php');
                    // exit;
                } else {
                    // Invalid login credentials
                    $error = 'Invalid username or password';
                }
            } else {
                // Empty username or password
                $error = 'Please enter username and password';
            }
        }

    } catch (Exception $e) {

        echo 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();

    }

?>