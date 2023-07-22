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

// <!-- `title`, `bus_fare`, `hotel_name`, `hotel_fare`, 
// `location`, `check_in`, `check_out`, `des`

$title = $_POST['title'];
$bus_fare = $_POST['bus_fare'];
$hotel_name = $_POST['hotel_name'];
$hotel_fare = $_POST['hotel_fare'];
$locations = $_POST['location'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$des = $_POST['des'];

$sql = "INSERT INTO tour (title, bus_fare, hotel_name, hotel_fare, locations, check_in, check_out, des, img)
        VALUES('$title','$bus_fare','$hotel_name','$hotel_fare',
        '$locations','$check_in','$check_out', '$des', 'cox.jpg');";

$sql1 = "INSERT INTO locations (name)
        VALUES('$locations');";

// echo "Connected successfully";

$success = mysqli_query($conn, $sql);
$success2 = mysqli_query($conn, $sql1);

if ($success) {
  echo "<script> window.location.assign('tour_table.php'); </script>";
} else {
  echo "Failed";
}
