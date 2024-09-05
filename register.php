<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "root";
$database = "kruthi";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo '<script>';
        echo 'alert("Error: Passwords do not match.");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
        exit();
    }

    // Insert user details into the database
    $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);

    // If the user is registered successfully, display a pop-up and redirect
    if (mysqli_stmt_execute($stmt)) {
        
       echo 'Registration successful!';
        // Redirect to the login page or perform other actions after successful registration
        header('Location: login.html');
        exit();
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

// Close the database connection
mysqli_close($conn);
?>
