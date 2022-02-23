<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "../../components/header.php"; ?>

    <link href="/src/lib/css/sidebar.css" rel="stylesheet">
</head>

<body class="bg-light">
    <main>
        <?php include_once "../../components/clients/sidebar.php"; ?>

        <div class="d-flex flex-column mt-4 ms-4">
            <div class="d-flex flex-row text-center" style="user-select:none;">
                <div class="me-4">
                    <div class="card text-dark bg-light mb-3 shadow rounded" style="width: 15rem; max-width: 18rem;">
                        <div class="card-body my-4">
                            <h1 class="card-title">11</h1>
                            <p class="card-text fs-5">Rides</p>
                        </div>
                    </div>
                </div>
                <div class="me-4">
                    <div class="card text-dark bg-light mb-3 shadow rounded" style="width: 15rem; max-width: 18rem;">
                        <div class="card-body my-4">
                            <h1 class="card-title">11</h1>
                            <p class="card-text fs-5">Reviews</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row" style="user-select:none;">
                <div class="me-4">
                    <div class="card text-dark bg-light mb-3 shadow rounded" style="min-width: 31.5rem; min-height: 31.5rem;">
                        <div class="card-body my-3">
                            <h6 class="card-title text-center fw-bold">Now Booked Drives</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">From</th>
                                    <th scope="col">To</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    <?php
                                        require_once '../../../models/database.inc.php';

                                        $num = 1;
                                        $conn = new Database();
                                        $db = $conn->db();
                                        $sql = "SELECT * FROM booked WHERE `status`=1 LIMIT 5;";
                                        $result = mysqli_query($db, $sql);
                                        $items = mysqli_fetch_all($result, MYSQLI_ASSOC);

                                        foreach ($items as $items) {
                                            echo '
                                                <tr>
                                                    <th scope="row">'. $num .'</th>
                                                    <td>'. $item['from'] .'</td>
                                                    <td>'. $item['to'] .'</td>
                                                    <td>'. $item['Date'] .'</td>
                                                    <td>'. $item['Time'] .'</td>
                                                </tr>
                                            ';
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <div class="text-center position-absolute" style="left: 40%!important; bottom: 3%!important;">
                                <a class="btn btn-primary" href="/c/orders" role="button">Load More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include_once "../../components/footer.php"; ?>
    <?php include_once "../../components/scripts.php"; ?>
    
</body>
</html>


<!-- <tr>
    <th scope="row">1</th>
    <td>Kurunegala</td>
    <td>Colombo</td>
    <td>02/02/2022</td>
    <td>10:55AM</td>
</tr> -->