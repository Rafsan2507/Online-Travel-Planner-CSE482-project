<?php
include('header.php');
include('connection.php');

?>

<?php
if (isset($_SESSION['name'])) {
?>
    <h1 class="h3 mb-4 text-gray-800">Tour</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tour List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Bus Fare</th>
                            <th>Hotel Name</th>
                            <th>Hotel Title</th>
                            <th>Location</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Bus Fare</th>
                            <th>Hotel Name</th>
                            <th>Hotel Title</th>
                            <th>Location</th>
                            <th>Image</th>
                        </tr>
                    </tfoot>
                    <tbody>
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
                        $sql = "SELECT * FROM tour";
                        // $result = mysql_query("SELECT * FROM Form");
                        $result = mysqli_query($conn, $sql);

                        $row = mysqli_fetch_array($result, MYSQLI_NUM);
                        // printf ("%s (%s)\n", $row[0], $row[1]);
                        while ($row = mysqli_fetch_array($result)) {
                            // echo "".$row[0] . "<br>";
                            echo "<tr>";
                            echo "<td>" . $row[1] . "</td>";
                            echo "<td>" . $row[8] . "</td>";
                            echo "<td>" . $row[2] . "</td>";
                            echo "<td>" . $row[3] . "</td>";
                            echo "<td>" . $row[4] . "</td>";
                            echo "<td>" . $row[5] . "</td>";
                            echo '<td><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="../assets/' . $row["img"] . '">""</td>';

                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php
    include('footer.php');
    ?>
<?php
} else {
    echo "<script> window.location.assign('login.php'); </script>";
}
?>