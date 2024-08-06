<?php
session_start();

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "Reached dblogin.php<br>";

if (isset($_POST['email']) && isset($_POST['pass'])) {
    $uname = $_POST['email'];
    $pass = $_POST['pass'];
    
    echo "Email: $uname<br>";
    echo "Password: $pass<br>";

    if ($uname === "admin@gmail.com" && $pass === "admin2024") {
        $_SESSION['adminloggedin'] = true;
        header('Location: usersList.php');
        exit();
    } else {
        echo "Invalid username or password.<br>";
    }
} else {
    echo "Please enter username and password.<br>";
}
?>
