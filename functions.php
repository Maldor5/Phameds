

<?php

    function set_session_details() {
        $userName = '';
        $userRole = '';
    
        if (isset($_SESSION['username']) && isset($_SESSION['role'])) {
            // Retrieve the user's name from the session
            $userName = $_SESSION['username'];
            $userRole = $_SESSION['role'];
        }
    
        return array($userName, $userRole);
    }
    

    function check_login(){
        // Check if the staff member is not logged in
        if (!isset($_SESSION['id'])) {
            header('Location: index.php');
            exit;
        }
    }
        

?>