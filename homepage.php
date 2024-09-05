<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f1f1f1;
      background-image: url('photos/photo4.jpg');
      background-repeat: no-repeat;
      background-size: cover; /* Replace with the path to your background image */
    }

    .container {
      max-width: 400px;
      margin: 100px auto;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    input {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      padding: 10px;
      background-color: blue;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }

    nav ul {
      list-style: none;
      display: flex;
      justify-content: center;
      background-color: gray;
      padding: 10px 0;
    }

    nav li {
      margin: 0 15px;
    }

    nav a {
      color: #fff;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
  <!-- ... Same meta tags and title ... -->
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <nav>
    <ul>
      <li><a href="homepage.php">Dashboard</a></li>
      <li><a href="profile.html">Profile</a></li>
      <li><a href="courses.html">Projects</a></li>
      <li><a href="grades.php">Grades</a></li>
      <li><a href="announcements.php">Announcements</a></li>
      <li><a href="certificates.php" id="certificates-link">Certificates</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </nav>
  <div class="container">
    <h2>Welcome to Your Dashboard!</h2>
  </div>
</body>
</html>

