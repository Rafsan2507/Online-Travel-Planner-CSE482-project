<?php
include('header.php');
include('connection.php');
?>
<?php
if (isset($_SESSION['name'])) {
?>
    <h1 class="h3 mb-4 text-gray-800">Tour</h1>
    <!-- `title`, `bus_fare`, `hotel_name`, `hotel_fare`, `location`, `check_in`, `check_out`, `des`SELECT * FROM `tour` WHERE 1 -->
    <form name="f2" action="savetour.php" method="POST">
        <div class="mb-3"><label for="title">Tour Title</label>
            <input class="form-control" id="title" name="title" type="text" placeholder="Tour Title">
        </div>
        <div class="mb-0"><label for="des">Description</label>
            <textarea class="form-control" id="des" name="des" rows="3"></textarea>
        </div>
        <div class="mb-3"><label for="bus_fare">Bus Fare</label>
            <input class="form-control" id="bus_fare" name="bus_fare" type="number" placeholder="Bus Fare">
        </div>
        <div class="mb-3"><label for="hotel_name">Hotel Name</label>
            <input class="form-control" id="hotel_name" name="hotel_name" type="text" placeholder="Hotel Name">
        </div>
        <div class="mb-3"><label for="hotel_fare">Hotel Fare</label>
            <input class="form-control" id="hotel_fare" name="hotel_fare" type="number" placeholder="Bus Fare">
        </div>
        <div class="mb-3"><label for="location">Location</label>
            <input class="form-control" id="location" name="location" type="text" placeholder="Location">
        </div>

        <div class="mb-3"><label for="check_in">Check In</label>
            <input class="form-control" id="check_in" name="check_in" type="date" placeholder="">
        </div>

        <div class="mb-3"><label for="check_out">Check Out</label>
            <input class="form-control" id="check_out" name="check_out" type="date" placeholder="">
        </div>

        <div class="mb-3">
            <button class="form__button" type="submit">Save</button>
            <!-- <input class="form-control" id="check_out" type="date" placeholder=""> -->
        </div>

    </form>


<?php
} else {
    echo "<script> window.location.assign('login.php'); </script>";
}
?>
<!-- <h1 class="h3 mb-4 text-gray-800">Dashboard</h1> -->

<?php
include('footer.php');
?>