<?php
include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>School supplies</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<a href="index.php">
<div id="topLine">
    <p id="mainText">school supplies</p>
    <div id="login">
        <input type='checkbox' id='form-switch'>
        <form id='login-form' action="includes/login.inc.php" method='post'>
            <input type="text" name="uid" placeholder="Username" required>
            <input type="password" name="pwd" placeholder="Password" required>
            <button type='submit' name="submit" id="signIn" class="styleSign">Sign in</button>
            <label for='form-switch'><span>Sign up</span></label>
        </form>
        <form id='register-form' action="includes/signup.inc.php" method='post'>
            <input type="text" name="uid" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="pwd" placeholder="Password" required>
            <input type="password" name="repwd" placeholder="Re Password" required>
            <button type='submit' name="submit" id="signUp" class="styleSign signUp">Register</button>
            <label for='form-switch'>Already Member ? Sign In Now.</label>
        </form>
    </div>
</div>
</a>
<hr>
<ul id="menu">
    <li><a href="notebook.php"><span>Notebooks</span></a></li>
    <li><a href="marker.php"><span>Markers</span></a></li>
    <li><a href="backpack.php"><span>Backpacks</span></a></li>
</ul>