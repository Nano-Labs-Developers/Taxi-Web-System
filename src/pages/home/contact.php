<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "../../components/header.php"; ?>
</head>

<body>
    <?php include_once "../../components/landing/navigation.php"; ?>

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
                <button class="btn btn-primary btn-lg" type="submit">Submit</button>
            </div>
        </form>
    </div>

    <?php include_once "../../components/footer.php"; ?>
    <?php include_once "../../components/scripts.php"; ?>
    
</body>
</html>