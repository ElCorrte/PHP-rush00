<?php

if (isset($_POST['submit'])) {

    include_once 'dbh.inc.php';

    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $repwd = mysqli_real_escape_string($conn, $_POST['repwd']);

    //Error handlers
    //Check for empty fields
    if (empty($uid) || empty($email) || empty($pwd) || empty($repwd)) {
        exit();
    } else {
        //Check input
         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
             header("Location: ../index.php?signup=email");
             exit();
         } else {
             $sql = "SELECT * FROM users WHERE user_uid='$uid'";
             $result = mysqli_query($conn, $sql);
             $resultCheck = mysqli_num_rows($result);

             if ($resultCheck > 0) {
                 header("Location: ../index.php?signup=usertaken");
                 exit();
             } else {
                 if (strcmp($pwd, $repwd)) {
                     header("Location: ../index.php?signup=passwords-do-not-match");
                     exit();
                 }
                 //Hashing the pass
                 $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                 //Insert the user into the database
                 $sql = "INSERT INTO users (user_email, user_uid, user_pwd) VALUES ('$email', '$uid', '$hashedPwd' );";
                 mysqli_query($conn, $sql);
                 header("Location: ../index.php?signup=success");
                 exit();
             }
         }
    }
} else {
    header("Location: ../index.php");
    exit();
}