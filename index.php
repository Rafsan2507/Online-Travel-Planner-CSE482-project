<?php
include('session.php');
include('dbconnect.php');
include('header.php');
?>

<main>
    <div class="bg-image" style="
    background-image: url('assets/bg.jpg');
    height: 600px;
  ">
        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <h1 class="display-4 fw-bold lh-1 mb-3">Online Travel Platform</h1>
                    <p class="col-lg-10 fs-4">Plan your next tour with us.</p>
                </div>
                <div class="col-md-10 mx-auto col-lg-5">
                    <form class="p-4 p-md-5 border rounded-3 bg-light" action="result.php" method="POST">
                        <div class="form-floating mb-3 search-box">
                            <input type="text" class="form-control" id="location" name="location" autocomplete="off" placeholder="Search" />
                            <!-- <input type="number" class="form-control" id="location_id" name="location_id" autocomplete="off" placeholder="Search" /> -->
                            <label for="floatingInput">Enter Location</label>
                            <div class="result"></div>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="b-example-divider"></div>
    <?php
    if (isset($_COOKIE['locations'])) {


    ?>
        <section>
            <div class="container py-4 py-xl-5">
                <div class="row mb-5">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <h2>Suggested Tours</h2>
                    </div>
                </div>
                <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                    <?php
                    $locations = $_COOKIE['locations'];
                    //to prevent from mysqli injection  
                    $locations = stripcslashes($locations);

                    $locations = mysqli_real_escape_string($conn, $locations);


                    $sql = "select * from tour where locations = '$locations'";
                    $result = mysqli_query($conn, $sql);
                    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                    $count = mysqli_num_rows($result);
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
                    }
                    ?>
                </div>
            </div>
        </section>
    <?php
    }
    ?>

</main>

<?php
include('footer.php');
?>