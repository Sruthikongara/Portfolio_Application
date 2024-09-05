<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
    <title>Portfolio</title>
    <!-- Include AngularJS script -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url('photos/photo1.jpg'); /* Replace with the path to your background image */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .header {
            width: 100%;
            background-color: rgba(51, 51, 51, 0.8); /* Background color with opacity */
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            top: 0;
            left: 0;
        }

        .container {
            text-align: center;
            padding: 100px;
            margin-top: 50px;
            background-color: rgba(255, 255, 255, 0.8); /* Background color with opacity */
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .login-option {
            margin: 20px;
            display: inline-block;
        }

        .login-option img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }

        .login-option p {
            margin-top: 10px;
        }

        .login-link {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .register-link {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
    <body>
        <?php
        $welcomeMessage = "Welcome to the student portfolio website!";
        ?>
        <div class="header">
        <h1>STUDENT WEBSITE</h1>
        <marquee behavior="scroll" direction="left">
            <?php echo $welcomeMessage; ?>
        </marquee>
    </div>
    <div class="container">
        <div class="login-option">
            <img src="photos/photo2.jpg" alt="User Login">
            <p>User <a href="login.html" class="login-link" style="color: blue;">Login</a>/<a href="registerpage.html" class="register-link">Register</a></p>
        </div>
    </div>
    </body>
</html>
