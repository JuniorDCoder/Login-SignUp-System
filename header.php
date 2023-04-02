<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Basic Login Form">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" type="text/css" href="includes/stylelogin.css">
    <style type="text/css">
        *{
            margin:0px 0px 10px 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        body{
            margin:  0px;
            padding: 0;
            background: url(https://i.gifer.com/9kGQ.gif);
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        nav{
            display: flex;
            justify-content: space-around;
            align-items: center;
            min-height: 8vh;
            background-color: blue;
            font-family: 'poppins', sans-serif;
        }
        .log{
            padding-top: 15px;
        }
        .nav-links{
            display: flex;
            justify-content: space-around;
            width: 63%;
        }
        .nav-links li{
            list-style: none;
            padding-top: 15px;
        }
        .nav-links a{
            color: rgb(226,226,226);
            text-decoration: none;
            letter-spacing: 2px;
            font-weight: bold;
            font-size: 14px;
            transition: 1s ease;
        }
        .nav-links a:hover{
            color: red;
        }
    </style>
</head>
<body>

    <header>
        
        <nav>
            <div class="log">
                <h4>D'CODER</h4>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="">Portfolio</a></li>
                <li><a href="">About Me</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </nav>
            <div>

                <?php

                    if (isset($_SESSION['userId'])) {
                        echo '<form action="includes/logout.inc.php" method="post">
                        <button type="submit" name="logout-submit">Logout</button>
                        </form>';
                    }

                    else{
                        echo '<div class="login">
                        <img src="https://gifimage.net/wp-content/uploads/2018/04/login-gif-images-12.gif" class="logo">
                        <h1>LOGIN</h1>
                        <form class="login-form" action="includes/login.inc.php" method="post">
                        <p>User Name</p>
                        <input type="text" name="mailuid" placeholder="Username/E-mail...">
                        <p>Password</p>
                        <input type="password" name="pwd" placeholder="Password">
                        <input type="submit" name="login-submit" value="Login">
                        <a href="">Reset Password</a>
                        <h5>New User?</h5>
                        <a href="signup.php">Signup</a>
                        </form>
                        </div>';
                        
                    }
                ?>
            </div>        
    </header>
