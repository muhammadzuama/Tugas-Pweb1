<?php
require_once "config.php";
$connection=getconnection();

function register($data){
    global $connection;
    $username= stripslashes($data["username"]);
    $country=$data["country"];
    $email=stripslashes( $data["email"]);
    $password = mysqli_real_escape_string($connection,$data["password"]);
    $password2 = mysqli_real_escape_string($connection,$data["password2"]);

    if($password !== $password2){
        echo "<script>alert('konfirmasi passsword salah')</script>";
        return false;
    }
    $result= mysqli_query($connection,"SELECT username FROM  user WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>alert('username sudah terdaftar')</script>";
        return false;
    }

    $password=password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($connection,"INSERT INTO user (username, country, email, password)
    VALUES('$username','$country','$email','$password') ");
    return mysqli_affected_rows($connection);
}