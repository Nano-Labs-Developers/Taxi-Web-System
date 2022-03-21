<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "../../Header.php"; ?>
</head>

<body>
    <?php include_once "../../Navbar.php"; ?>

    <div class="container py-5">
        <h1 class="text-center my-5">CONTACT US</h1>
        <form class="my-5 py-5" method="POST" action="">
            <div class="mb-3">
                <label class="form-label" for="name">Name</label>
                <input class="form-control" id="name" type="text" placeholder="Name" required />
            </div>
            <div class="mb-3">
                <label class="form-label" for="emailAddress">Email Address</label>
                <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" required />
            </div>
            <div class="mb-3">
                <label class="form-label" for="message">Message</label>
                <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" required autocomplete="off"></textarea>
            </div>
            <div class="d-grid mt-4">
                <button class="btn btn-primary btn-lg" onclick="Toasty()" type="submit">Submit</button>
            </div>
        </form>
    </div>
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="assets/favicon/favicon-32x32.png" class="rounded me-2" alt="...">
                <strong class="me-auto">City Taxi</strong>
                <small>10 sec ago</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Successfully sent message.
            </div>
        </div>
    </div>

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

    <?php include_once "../../Footer.php"; ?>
    <?php include_once "../../Scripts.php"; ?>
    
</body>
</html>