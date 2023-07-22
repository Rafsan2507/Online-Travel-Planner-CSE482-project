<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CSE482</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/heroes/">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=3897008e750eef6216dd88bb7c656492">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css?h=befd8a398792e305b7ffd4a176b5b585">
    <link rel="stylesheet" href="assets/css/Hero-Carousel.css?h=4f3cfa46e40e236365345fc77963f4b8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css?h=da830b6503e0457b5735b0129f20b163">
    <link rel="stylesheet" href="assets/css/styles.css?h=d41d8cd98f00b204e9800998ecf8427e">
    <style>
        .b-example-divider {
            height: 1rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }
    </style>
    <style>
        body {
            font-family: Arail, sans-serif;
        }

        .result {
            position: absolute;
            z-index: 999;
            top: 100%;
            left: 0;
        }


        .result {
            background: #add8e6;
            width: 100%;
            box-sizing: border-box;
        }

        .result p {
            margin: 0;
            padding: 7px 10px;
            border: 1px solid #CCCCCC;
            border-top: none;
            cursor: pointer;
        }

        .result p:hover {
            background: white;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.search-box input[type="text"]').on("keyup input", function() {

                var inputVal = $(this).val();
                var resultDropdown = $(this).siblings(".result");
                if (inputVal.length) {
                    $.get("live-search.php", {
                        term: inputVal
                    }).done(function(data) {

                        resultDropdown.html(data);
                    });
                } else {
                    resultDropdown.empty();
                }
            });

            $(document).on("click", ".result p", function() {
                $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
                $(this).parent(".result").empty();
            });
        });
    </script>
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark navbar-expand-md" style="padding-left: 60px;">
            <div class="container-fluid"><a class="navbar-brand" href="index.php">Online Travel Platfrom</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav">


                        <?php

                        if (isset($_SESSION['name'])) {
                        ?>
                        <?php
                            echo "<li class='nav-item'><a class='nav-link' href='sign_log\index.php'>Hello " . $_SESSION['name'] . "</a></li>";
                            echo '<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>';
                        } else {
                            echo '<li class="nav-item"><a class="nav-link" href="sign_log\log.php">Sign In</a></li>';
                            echo '<li class="nav-item"><a class="nav-link" href="sign_log\index.php">Register</a></li>';
                        }
                        ?>
                        <li class='nav-item'><a class='nav-link' href='aboutus.php'>About Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>