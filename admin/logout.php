<?php
// Start the session and get the data
session_start();
session_unset();
session_destroy();
echo "<br> You have been logged out";
echo "<script> window.location.assign('../index.php'); </script>";
