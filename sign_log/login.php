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



$email = $_POST['email'];
$password = $_POST['password'];

// $sql = "INSERT INTO users (name, email, password, phone)
//         VALUES('$name','$email','$password','$phone');";

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password';";

// echo "Connected successfully";

$success = mysqli_query($conn, $sql);

if (mysqli_num_rows($success) > 0) {
  echo "Logied In";
} else {
  echo "Failed";
}

?>


<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "otp";

// $conn = new mysqli($servername, $username, $password, $dbname);


// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }


// $email=$_POST['email'];
// $password=$_POST['password'];

// $sql = "SELECT * FROM users WHERE email='$email' AND password='$password';";
// $query=mysqli_query($conn,"select * from users where email='$email' AND password='$password");

// $count=mysqli_num_rows($query);

// $success = mysqli_query($conn,$sql);

// if(mysqli_num_rows($success)>0){
//     echo "Logied In";
// }else{
//     echo "Failed";
// }

// if($count ==1){
// 	$row = mysqli_fetch_array($query);
// $_SESSION['name']=$row['name'];
// $_SESSION['phone']=$row['phone'];

//     echo 'Success';

// }
// else{
//     echo 'Error';
// 	$_SESSION['error'] = 'Your Email or Password is not valid';
// 	}

// header('location: login.php');
?>

