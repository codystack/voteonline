<?php

include "db.php";

//Login Admin Start
if (isset($_POST['login_btn'])) {
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);


    $password = sha1($password);
    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($result)) {
        $username = $row['username'];
        $email  = $row['email'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
    }if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['firstname'] = $firstname;
        $_SESSION['lastname'] = $lastname;
        header('location: dashboard');
    }else {
        $_SESSION['message_title'] = "Login Error";
        $_SESSION['message'] = "Invalid login details";
    }
}
//Login Admin End