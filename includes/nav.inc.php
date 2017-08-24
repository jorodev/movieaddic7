<?php 
    require 'config/db.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="assets/css/index.css">
        <link rel="stylesheet" href="assets/css/register.css">
        <link rel="stylesheet" href="assets/css/login.css">
        <link rel="stylesheet" href="assets/css/profile.css">
        <link rel="stylesheet" href="assets/css/settings.css">
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    </head>
    <body>
        <div class="nav-wrapper">
            <nav class="nav container">
                <div class="nav-logo">
                    <h3><a href="index.php">Movie<span class="recolor">Addic7</span></a></h3>
                </div>
                <div class="nav-menu">
                <?php
                    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true && isset($_SESSION['username'])) {
                        echo '<ul>';
                        echo '<li><a href="profile.php">';
                        echo '<i class="fa fa-user user-icon" aria-hidden="true"></i>';
                        echo " ";
                        echo $_SESSION['username'];
                        echo '</a></li>';
                        echo '<li><a href="logout.php"><i class="fa fa-sign-out user-icon" aria-hidden="true"></i> Logout</a></li>';
                        echo '</ul>';
                    } else {
                        echo '<ul>';
                        echo '<li><a href="login.php"><i class="fa fa-sign-in user-icon" aria-hidden="true"></i> Login</a></li>';
                        echo '</ul>';
                    }
                ?>
                </div>
            </nav>
        </div>