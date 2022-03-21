<?php

require_once '../../models/database.inc.php';
$conn = new Database();
$db = $conn->db();

class Reviews {
    function LoadReviewData() {
        $sql = "SELECT * FROM booked WHERE `status`=1 LIMIT 5;";
        $result = mysqli_query($db, $sql);
        $items = mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach ($items as $item) {
            echo '
                <div class="reviews-members pt-4 pb-4">
                    <div class="media d-flex flex-row">
                        <img alt="Generic placeholder image" src="http://bootdey.com/img/Content/avatar/avatar6.png" class="mr-3 rounded-pill">
                        <div class="ms-3">
                            <div class="reviews-members-header">
                                <span class="star-rating float-end">
                                    <a href="#"><i class="bi bi-star-fill"></i></a>
                                    <a href="#"><i class="bi bi-star-fill"></i></a>
                                    <a href="#"><i class="bi bi-star-fill"></i></a>
                                    <a href="#"><i class="bi bi-star-fill"></i></i></a>
                                    <a href="#"><i class="bi bi-star"></i></i></a>
                                    </span>
                                <h6 class="mb-1"><a class="text-dark" href="#">'.$item['name'].'</a></h6>
                                <p class="text-gray">'.$item['commentTime'].'</p>
                            </div>
                            <p>'.$item['description'].'</p>
                            <div class="reviews-members-footer">
                                <a class="total-like text-decoration-none" href="#"><i class="bi bi-hand-thumbs-up-fill pe-1"></i> '.$item['likes'].'</a>
                                <a class="total-like text-decoration-none" href="#"><i class="bi bi-hand-thumbs-down-fill pe-1"></i> '.$item['dislikes'].'</a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            ';
        }
    }

    function InsertLikes() {

    }
}

?>