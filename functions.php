

<?php
    function set_session_details() {

        
        if (isset($_SESSION['username'])) {
        // Retrieve the user's name from the session
        $userName = $_SESSION['username'];
        }

        return $userName;
    }

    function check_login(){
        // Check if the staff member is not logged in
        if (!isset($_SESSION['user_id'])) {
            header('Location: index.php');
            exit;
        }
    }

        

?>