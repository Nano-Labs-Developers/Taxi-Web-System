<!DOCTYPE html>
<html lang="en" class="drive drive-signup">

<head>
    <?php include_once "../../Header.php"; ?>

    <style>
        .content-left {
            background: url(/assets/img/bg.jpg) center no-repeat;
            background-size: cover;
            min-height: 94.4vh;
        }
    </style>
</head>

<body class="bg-light">
    <?php include_once "../../Navbar.php"; ?>

    <div class="container-fluid">
        <div class="row ">
            <div class="col bg-secondary content-left"></div>
            <div class="col bg-light content-right text-center">
                <form class="form-driver-signup p-5 m-5" method="POST" action="" data-request="onDriverSignUp" data-request-success="$('.form-driver-signup')[0].reset()" accept-charset="UTF-8">
                    <div class="form-group mb-5">
                        <p style="font-size: 2rem;">Signup to drive<br>with City Taxi</p>
                    </div>
                    <div class="form-group mb-4">
                        <input type="email" class="form-control" name="email"id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Mobile Number" required>
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" class="form-control" name="vehicle_type" id="vehicle_type" placeholder="Enter Vehicle Type" required>
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" class="form-control" name="vehicle_make" id="vehicle_make" placeholder="Enter Vehicle Make" required>
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" class="form-control" name="vehicle_model" id="vehicle_model" placeholder="Enter Vehicle Modle" required>
                    </div>
                    <div class="form-group mb-4">
                        <select class="form-select" name="working_hours" id="working_hours" aria-label="Select working time" aria-invalid="true" required autocomplete="off">
                            <option value>Full time or Part Time</option>
                            <option value="Part time">Part Time</option>
                            <option value="Full Time">Full Time</option>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <select class="form-select" name="district" id="district" aria-label="Select working district" aria-invalid="true" required autocomplete="off">
                            <option value>Working District</option>
                        </select>
                    </div>
                    <button type="submit" onclick="Toasty()" class="btn btn-warning btn-lg btn-block">REGISTER</button>
                </form>
            </div>
        </div>
    </div>
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="assets/favicon/favicon-32x32.png" class="rounded me-2" alt="...">
                <strong class="me-auto">City Taxi</strong>
                <small>11 sec ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                User data updated.
            </div>
        </div>
    </div>

    <?php include_once "../../Footer.php"; ?>
    <?php include_once "../../Scripts.php"; ?>

    <script>
        var option = {
            animation: true,
            delay: 12000
        };

        function Toasty() {
            var toastHTMLelement = document.getElementById("liveToast");
            var toastElement = new bootstrap.Toast(toastHTMLelement, option);
            toastElement.show();
        }
    </script>
    
</body>
</html>

<?php
    require_once "../../../models/DataContext.inc.php";
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['email']) || isset($_POST['name']) || isset($_POST['phone']) || isset($_POST['vehicle_type']) || isset($_POST['vehicle_model']) || isset($_POST['working_hours']) || isset($_POST['district'])) {
            $name = isset($_POST['name']);
            $email = isset($_POST['email']);
            $phone = isset($_POST['phone']);
            $vehicle_type = isset($_POST['vehicle_type']);
            $vehicle_make = isset($_POST['vehicle_make']);
            $vehicle_model = isset($_POST['vehicle_model']);
            $working_hours = isset($_POST['working_hours']);
            $district = isset($_POST['district']);

            $conn = new DataContext();
            $db = $conn->db();

            $stmt = $db->prepare("INSERT INTO driver (`name`, `email`, `mobileNo`, `vehicleType`, `vehicleMake`, `vehicleModel`, `workHour`, `workDistrict`) VALUES (?,?,?,?,?,?,?)");
            $stmt->bind_param("sssssss", $name, $email, $phone, $vehicle_type, $vehicle_model, $working_hours, $district);
            
            if ($stmt->execute()) {
                echo '<script>location.replace("/drive?success=true");</script>';
            }
            else {
                echo '<script>location.replace("/drive?failed=false");</script>';
            }
        }
    }

    if(isset($_GET['success']))
    {
        echo'<script> swal("success", "success", "success");</script>';
    }
    if(isset($_GET['failed']))
    {
        echo'<script>swal("Failed", "Something went wrong!", "error");</script>'; 
    }
    if(isset($_GET['alreadyexists']))
    {
        echo'<script>swal("Failed", "Already exists", "error");</script>';
    }

?>
