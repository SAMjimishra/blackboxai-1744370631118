<?php
session_start();

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Function to sanitize input data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Check if the form was submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize form data
    $username = isset($_POST['username']) ? sanitize_input($_POST['username']) : '';
    $password = isset($_POST['password']) ? sanitize_input($_POST['password']) : '';
    
    // Validate for empty fields
    $errors = [];
    
    if (empty($username)) {
        $errors[] = "Username is required";
    }
    
    if (empty($password)) {
        $errors[] = "Password is required";
    }
    
    // If there are any errors, redirect back to the form with error message
    if (!empty($errors)) {
        $error_message = implode(", ", $errors);
        header("Location: index.php?error=" . urlencode($error_message));
        exit();
    }
    
    // If validation passes, simulate successful login
    // Note: In a real application, you would verify credentials against a database
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
    exit();
} else {
    // If someone tries to access this file directly, redirect to the login page
    header("Location: index.php");
    exit();
}
?>
