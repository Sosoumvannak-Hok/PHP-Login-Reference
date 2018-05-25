<?php

# This script is dedicated to index.php -> login_box form

include_once 'db_connection.inc.php';

session_start();

# Checks if <input type="submit" name="login" value="Login"> was clicked
if (isset($_POST['login'])) {
    
    $u_first = $_POST['u_first'];   # Stores value from <input type="text" name="u_first" placeholder="Firstname">
    $u_last = $_POST['u_last'];     # Stores value from <input type="text" name="u_last" placeholder="Lastname">
    $u_id = $_POST['u_id'];         # Stores value from <input type="text" name="u_id" placeholder="ID">
    
    # Checks if any of the fields are empty
    if (empty($u_first) || empty($u_last) || empty($u_id)) {
        header("Location: ../index.php");
        exit();
    } else {
        
        $sql = "SELECT user_first, user_last, user_id FROM users WHERE user_first='$u_first' AND user_last='$u_last' AND user_id='$u_id'";
        $result = mysqli_query($db_connection, $sql);
        
        # Checks if database does NOT have ALL 3 user information
        if (!$result) {
            header("Location: ../index.php");
            exit();
        } else {
            
            $_SESSION['u_first'] = $u_first;    # Stores $u_first as GLOBAL / SESSION variable 
            $_SESSION['u_last'] = $u_last;      # Stores $u_last as GLOBAL / SESSION variable 
            $_SESSION['u_id'] = $u_last;        # Stores $u_id as GLOBAL / SESSION variable 
            
            header("Location: ../index.php");
            exit();
        }
    }
    
} else {
    header("Location: ../index.php");
    exit();
}

?>