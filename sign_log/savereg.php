<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "otp";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];

$sql = "INSERT INTO users (name, email, password, phone)
        VALUES('$name','$email','$password','$phone');";

// echo "Connected successfully";

$success = mysqli_query($conn, $sql);

if ($success) {
  echo "<script type='text/javascript'>document.location='log.php'</script>";
} else {
  echo "Failed";
}
