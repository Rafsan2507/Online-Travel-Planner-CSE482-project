<?php
include('header.php');
// include('session.php');
include('connection.php');
?>
<?php
if (isset($_SESSION['name'])) {
?>
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
    <!-- echo "<li class='nav-item'><a class='nav-link' href='sign_log\index.php'>" . $_SESSION['name'] . "</a></li>";
    echo '<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>'; -->
<?php
} else {
    echo "<script> window.location.assign('login.php'); </script>";
}
?>
<!-- <h1 class="h3 mb-4 text-gray-800">Dashboard</h1> -->

<?php
include('footer.php');
?>