<?php
include('session.php');
include('header.php');
include('dbconnect.php');
include('function/includeWithVariables.php');
$locations = $_POST['location'];


//to prevent from mysqli injection  
$locations = stripcslashes($locations);

$locations = mysqli_real_escape_string($conn, $locations);


$sql = "select * from tour where locations = '$locations'";
$result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);
setcookie("locations", $locations, time() + 86000, "/");
?>
<main>
    <section>
        <div class="container py-4 py-xl-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Tours</h2>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                <?php
                if ($count > 0) {

                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                ?>

                        <div class="col">
                            <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="assets/<?php echo $row["img"]; ?>">
                                <div class="card-body p-4">
                                    <p class="text-primary card-text mb-0">Location: <?php echo $row["locations"]; ?></p>
                                    <h4 class="card-title"><?php echo $row["title"]; ?></h4>
                                    <p class="card-text">Hotel Name:<?php echo $row["hotel_name"]; ?></p>
                                    <p class="card-text">Hotel Fare:<?php echo $row["hotel_fare"]; ?></p>
                                    <p class="card-text">Bus Fare:<?php echo $row["bus_fare"]; ?></p>
                                    <p class="card-text">Description:<?php echo $row["des"]; ?></p>
                                    <?php
                                    // Start the session and get the data

                                    if (isset($_SESSION['name'])) {
                                        // echo "Welcome ". $_SESSION['username'];
                                    ?>
                                    <?php
                                        echo "<a class='nav-link' href='sign_log\index.php'>" . $_SESSION['name'] . "</a>";
                                        // echo "<h1>". $_SESSION['name']."</h1>";
                                        echo '<div class="d-flex"><a href="https://book.stripe.com/test_28og0e1lAbnkazK6oo" class="btn btn-primary" type="button" style="border-radius: 20px;width: 115px;height: 40px;">Book Now</a></div>';
                                    } else {
                                        echo '<div class="d-flex"><a href="sign_log\index.php" class="btn btn-primary" type="button" style="border-radius: 20px;width: 215px;height: 40px;">Register To Book</a></div>';
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                <?php
                    }
                    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    // return $row;
                    // includeWithVariables('tourlist.php', array('title' => $row));
                } else {
                    echo "<p>No matches found</p>";
                }
                ?>
            </div>
        </div>
    </section>
</main>

<?php
include('footer.php');
?>