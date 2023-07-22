<?php
include('connection.php');
$username = $_POST['user'];
$password = $_POST['pass'];

//to prevent from mysqli injection  
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

$sql = "select * from users where name = '$username' and password = '$password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
setcookie("name", $username, time() + 86000, "/");
if ($count == 1) {
    include('../session.php');
    $_SESSION['name'] = $username;
    $_SESSION['password'] = $password;
    echo "We have saved your session";
    // include('../index.php');
    echo "<script> window.location.assign('../index.php'); </script>";
    // includeWithVariables('header.php', array('name' => $username));
    // echo "<h1><center> Login successful </center></h1>";
    echo "Auction Item is a  " . $_COOKIE['name'];
} else {
    echo "<h1> Login failed. Invalid username or password.</h1>";
}
