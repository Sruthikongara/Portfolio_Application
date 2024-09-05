<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


$conn = mysqli_connect('localhost', 'root', 'root', 'kruthi');

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}
// Get the login credentials from the form
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Prepare the SQL statement
$sql = "SELECT * FROM users WHERE name = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);

// Get the result of the prepared statement
$result = mysqli_stmt_get_result($stmt);

// Check if the user exists
if ($result && mysqli_num_rows($result) > 0) {
    // Fetch the user data
    $user = mysqli_fetch_assoc($result);

    // Skip password verification and move to homepage.php directly
    session_start();
    $_SESSION['name'] = $user['name'];
    header('Location: homepage.php');
    exit();
} else {
    // The user does not exist
    echo 'Error: User not found.';
}

// Close the statement and the connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
