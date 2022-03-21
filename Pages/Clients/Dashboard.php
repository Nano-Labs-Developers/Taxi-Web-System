<!DOCTYPE html>
<html lang="en" class="client-dash">

<head>
    <?php include_once "../../Header.php"; ?>

    <link href="/src/lib/css/sidebar.css" rel="stylesheet">
</head>

<body class="bg-light">
    <main>
        <?php include_once "../../components/clients/sidebar.php"; ?>

        <div class="d-flex flex-column overflow-auto" style="width: 100%;height:100%;">
            <div class="d-flex flex-row justify-content-evenly flex-wrap m-4 text-center" style="user-select:none;">
                <div class="card text-dark bg-light mb-3 shadow rounded me-3" style="width: 15rem; max-width: 18rem;">
                    <div class="card-body my-4">
                        <h1 class="card-title">1</h1>
                        <p class="card-text fs-5">Rides</p>
                    </div>
                </div>
                <div class="card text-dark bg-light mb-3 shadow rounded me-3" style="width: 15rem; max-width: 18rem;">
                    <div class="card-body my-4">
                        <h1 class="card-title">0</h1>
                        <p class="card-text fs-5">Active Rides</p>
                    </div>
                </div>
                <div class="card text-dark bg-light mb-3 shadow rounded me-3" style="width: 15rem; max-width: 18rem;">
                    <div class="card-body my-4">
                        <h1 class="card-title">1</h1>
                        <p class="card-text fs-5">Complete Rides</p>
                    </div>
                </div>
                <div class="card text-dark bg-light mb-3 shadow rounded me-3" style="width: 15rem; max-width: 18rem;">
                    <div class="card-body my-4">
                        <h1 class="card-title">0</h1>
                        <p class="card-text fs-5">Canceled Rides</p>
                    </div>
                </div>
                <div class="card text-dark bg-light mb-3 shadow rounded me-3" style="width: 15rem; max-width: 18rem;">
                    <div class="card-body my-4">
                        <h1 class="card-title">1</h1>
                        <p class="card-text fs-5">Reviews</p>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-row justify-content-between flex-wrap m-4 text-center" style="user-select:none;">
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
                                    require_once '../../../models/DataContext.inc.php';

                                    $num = 1;
                                    $conn = new DataContext();
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
                            <a class="btn btn-primary" href="/c/orders" role="button">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="" style="margin-bottom: 65px;"></div>

            <?php include_once "../../Footer.php"; ?>
        </div>
    </main>

    <?php include_once "../../Scripts.php"; ?>
    
</body>
</html>


<!-- <tr>
    <th scope="row">1</th>
    <td>Kurunegala</td>
    <td>Colombo</td>
    <td>02/02/2022</td>
    <td>10:55AM</td>
</tr> -->