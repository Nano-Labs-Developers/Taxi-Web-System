<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['location_from']) || isset($_POST['location_to'])) {
            $from = $_POST['location_from'];
            $to = $_POST['location_to'];

            //echo '<script>console.log('.$from. $to.')</script>';
                        
            header('Location: /book?from='.$from.'&to='.$to);
            die();
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "../../Header.php"; ?>
</head>

<body class="bg-light">
    <?php include_once "../../Navbar.php"; ?>

    <main class="masthead">
        <div class="container px-5 mt-5 mb-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h1 class="display-1 lh-1 mb-3">Showcase your app beautifully.</h1>
                        <p class="lead fw-normal text-muted mb-5">Launch your mobile app landing page faster with this free, open source theme from Start Bootstrap!</p>
                        <div class="d-flex flex-column flex-lg-row align-items-center">
                            <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="https://startbootstrap.github.io/startbootstrap-new-age/assets/img/google-play-badge.svg" alt="..."></a>
                            <a href="#!"><img class="app-badge" src="https://startbootstrap.github.io/startbootstrap-new-age/assets/img/google-play-badge.svg" alt="..."></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="masthead-device-mockup">
                        <div class="device-wrapper">
                            <div class="device" data-device="" data-orientation="portrait" data-color="black">
                                <div class="screen bg-black">
                                    <img src="/assets/img/car.png" alt="" style="max-width: 100%; height: 100%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="text-center mb-4">
        <div class="card" style="width: 70%; margin: 0 auto;">
            <form method="POST" action="">
                <div class="card-body p-5">
                    <h5 class="card-title mb-3">Plan Your Ride</h5>
                    <input type="text" class="form-control mb-3" name="location_from" id="location_from" aria-describedby="location_from" placeholder="Enter Pickup Location" required autocomplete="off">
                    <input type="text" class="form-control mb-3" name="location_to" id="location_to" aria-describedby="location_from" placeholder="Enter Drop Location" required autocomplete="off">
                    <button type="submit" class="btn btn-warning btn-lg btn-block">BOOK NOW</button>
                </div>
            </form>
        </div>
    </div>
    <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom">Features</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
                </div>
                <div>
                    <h2>Ride</h2>
                    <p>City Taxi Ride-Hailing includes the largest fleet of vehicles in Sri Lanka offering both on-demand and pre-booking features at the best rates, including TUK-TUKs Flex, Minis, Cars, Minivans, and Vans offering you comfort, convenience and safety, covering the entire island nation.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"></use></svg>
                </div>
                <div>
                    <h2>Flash</h2>
                    <p>City Taxi Flash is a pioneering, on-demand, speedy parcel delivery platform, that enables a seamless package delivery experience, tapping into the largest live fleet of available vehicles in the city.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"></use></svg>
                </div>
                <div>
                    <h2>Safety</h2>
                    <p>When you drive with City Taxi, you get 24/7 driver support and insurance coverage. And all riders are verified with their personal information and phone number, so you’ll know who you’re picking up and so will we.</p>
                </div>
            </div>
        </div>
    </div>

    <?php include_once "../../Footer.php"; ?>
    <?php include_once "../../Scripts.php"; ?>

</body>
</html>
