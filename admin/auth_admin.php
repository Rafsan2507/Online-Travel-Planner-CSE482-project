<?php
include('connection.php');
include('session.php');
include('../function/includeWithVariables.php');
$username = $_POST['user'];
$password = $_POST['pass'];



//to prevent from mysqli injection  
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

$sql = "select * from admin where username = '$username' and password = '$password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {
    $_SESSION['name'] = $username;
    $_SESSION['password'] = $password;
    echo "<script> window.location.assign('index.php'); </script>";
    // includeWithVariables('header.php', array('name' => $username));
    // includeWithVariables('index.php', array('name' => $username));  
} else {
    echo "<h1> Login failed. Invalid username or password.</h1>";
}
