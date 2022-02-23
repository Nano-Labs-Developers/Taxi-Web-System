<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "../../components/header.php"; ?>

    <link href="/src/lib/css/sidebar.css" rel="stylesheet">
</head>

<body class="bg-light">
    <main>
        <?php include_once "../../components/clients/sidebar.php"; ?>

        <div class="d-flex flex-column overflow-auto">
            <div class="d-flex flex-row justify-content-between flex-wrap m-4" style="user-select:none;">
                <div class="card text-dark bg-light shadow rounded mt-4" style="min-width: 31.5rem; min-height: 31.5rem;">
                    <div class="card-body my-3">
                        <p class="card-title text-center fs-5 fw-bold">Active Orders</p>
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

                                    foreach ($items as $item) {
                                        echo '
                                            <tr>
                                                <th scope="row">'. $num .'</th>
                                                <td>'. $item['pickFrom'] .'</td>
                                                <td>'. $item['dropTo'] .'</td>
                                                <td>'. $item['pickDate'] .'</td>
                                                <td>'. $item['pickTime'] .'</td>
                                            </tr>
                                        ';
                                    }
                                ?>
                            </tbody>
                        </table>
                        <div class="text-center position-absolute" style="left: 40%!important; bottom: 3%!important;">
                            <a class="btn btn-primary" href="/c/orders?filter=active" role="button">Load More</a>
                        </div>
                    </div>
                </div>
                
                <div class="card text-dark bg-light shadow rounded mt-4" style="min-width: 31.5rem; min-height: 31.5rem;">
                    <div class="card-body my-3">
                        <p class="card-title text-center fs-5 fw-bold">Closed Orders</p>
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
                                    $sql = "SELECT * FROM booked WHERE `status`=2 LIMIT 5;";
                                    $result = mysqli_query($db, $sql);
                                    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);

                                    foreach ($items as $item) {
                                        echo '
                                            <tr>
                                                <th scope="row">'. $num .'</th>
                                                <td>'. $item['pickFrom'] .'</td>
                                                <td>'. $item['dropTo'] .'</td>
                                                <td>'. $item['pickDate'] .'</td>
                                                <td>'. $item['pickTime'] .'</td>
                                            </tr>
                                        ';
                                    }
                                ?>
                            </tbody>
                        </table>
                        <div class="text-center position-absolute" style="left: 40%!important; bottom: 3%!important;">
                            <a class="btn btn-primary" href="/c/orders?filter=closed" role="button">Load More</a>
                        </div>
                    </div>
                </div>

                <div class="card text-dark bg-light shadow rounded mt-4" style="min-width: 31.5rem; min-height: 31.5rem;">
                    <div class="card-body my-3">
                        <p class="card-title text-center fs-5 fw-bold">Canceled Orders</p>
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
                                    $sql = "SELECT * FROM booked WHERE `status`=3 LIMIT 5;";
                                    $result = mysqli_query($db, $sql);
                                    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);

                                    foreach ($items as $item) {
                                        echo '
                                            <tr>
                                                <th scope="row">'. $num .'</th>
                                                <td>'. $item['pickFrom'] .'</td>
                                                <td>'. $item['dropTo'] .'</td>
                                                <td>'. $item['pickDate'] .'</td>
                                                <td>'. $item['pickTime'] .'</td>
                                            </tr>
                                        ';
                                    }
                                ?>
                            </tbody>
                        </table>
                        <div class="text-center position-absolute" style="left: 40%!important; bottom: 3%!important;">
                            <a class="btn btn-primary" href="/c/orders?filter=canceled" role="button">Load More</a>
                        </div>
                    </div>
                </div>

                <div class="card text-dark bg-light shadow rounded mt-4" style="min-width: 31.5rem; min-height: 31.5rem;">
                    <div class="card-body my-3">
                        <p class="card-title text-center fs-5 fw-bold">Suspended Orders</p>
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
                                    $sql = "SELECT * FROM booked WHERE `status`=4 LIMIT 5;";
                                    $result = mysqli_query($db, $sql);
                                    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);

                                    foreach ($items as $item) {
                                        echo '
                                            <tr>
                                                <th scope="row">'. $num .'</th>
                                                <td>'. $item['pickFrom'] .'</td>
                                                <td>'. $item['dropTo'] .'</td>
                                                <td>'. $item['pickDate'] .'</td>
                                                <td>'. $item['pickTime'] .'</td>
                                            </tr>
                                        ';
                                    }
                                ?>
                            </tbody>
                        </table>
                        <div class="text-center position-absolute" style="left: 40%!important; bottom: 3%!important;">
                            <a class="btn btn-primary" href="/c/orders?filter=suspended" role="button">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once "../../components/footer.php"; ?>

        </div>
    </main>

    <?php include_once "../../components/scripts.php"; ?>
    
</body>
</html>