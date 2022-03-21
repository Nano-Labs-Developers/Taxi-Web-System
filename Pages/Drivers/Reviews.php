<!DOCTYPE html>
<html lang="en" class="client-review">

<head>
    <?php include_once "../../Header.php"; ?>

    <link href="/src/lib/css/sidebar.css" rel="stylesheet">
    <link href="/src/lib/css/review.css" rel="stylesheet">
</head>

<body class="bg-light">
    <main>
        <?php include_once "../../components/clients/sidebar.php"; ?>

        <div class="overflow-auto">
            <div class="container-fluid col-md-12 mt-3">
                <div class="offer-dedicated-body-left">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade active show" id="pills-reviews" role="tabpanel" aria-labelledby="pills-reviews-tab">
                            <div id="ratings-and-reviews" class="bg-white rounded shadow-sm p-4 mb-4 clearfix taxi-detailed-star-rating">
                                <h5 class="mb-0 pt-1">Your Ratings and Reviews</h5>
                            </div>
                            <div class="bg-white rounded shadow-sm p-4 mb-4 clearfix graph-star-rating">
                                <h5 class="mb-0 mb-4">Ratings</h5>
                                <div class="graph-star-rating-header">
                                    <div class="star-rating">
                                        <a href="#"><i class="bi bi-star-fill"></i></a>
                                        <a href="#"><i class="bi bi-star-fill"></i></a>
                                        <a href="#"><i class="bi bi-star-fill"></i></a>
                                        <a href="#"><i class="bi bi-star-fill"></i></i></a>
                                        <a href="#"><i class="bi bi-star"></i></i></a>
                                        <b class="text-dark ms-2">334</b>
                                    </div>
                                    <p class="text-dark mb-4 mt-2">Rated 4 out of 5</p>
                                </div>
                                <div class="graph-star-rating-body">
                                    <div class="rating-list">
                                        <div class="rating-list-left text-dark">
                                            5 Star
                                        </div>
                                        <div class="rating-list-center">
                                            <div class="progress">
                                                <div style="width: 56%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar bg-primary">
                                                    <span class="sr-only">56% Complete (danger)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rating-list-right text-dark">56%</div>
                                    </div>
                                    <div class="rating-list">
                                        <div class="rating-list-left text-dark">
                                            4 Star
                                        </div>
                                        <div class="rating-list-center">
                                            <div class="progress">
                                                <div style="width: 23%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar bg-primary">
                                                    <span class="sr-only">23% Complete (danger)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rating-list-right text-dark">23%</div>
                                    </div>
                                    <div class="rating-list">
                                        <div class="rating-list-left text-dark">
                                            3 Star
                                        </div>
                                        <div class="rating-list-center">
                                            <div class="progress">
                                                <div style="width: 11%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar bg-primary">
                                                    <span class="sr-only">11% Complete (danger)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rating-list-right text-dark">11%</div>
                                    </div>
                                    <div class="rating-list">
                                        <div class="rating-list-left text-dark">
                                            2 Star
                                        </div>
                                        <div class="rating-list-center">
                                            <div class="progress">
                                                <div style="width: 2%" aria-valuemax="5" aria-valuemin="0" aria-valuenow="5" role="progressbar" class="progress-bar bg-primary">
                                                    <span class="sr-only">02% Complete (danger)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rating-list-right text-dark">02%</div>
                                    </div>
                                </div>
                                <div class="graph-star-rating-footer text-center mt-3 mb-3">
                                    <button type="button" class="btn btn-outline-primary btn-sm">Rate and Review</button>
                                </div>
                            </div>
                            <div class="bg-white rounded shadow-sm p-4 mb-4 taxi-detailed-ratings-and-reviews">
                                <a href="#" class="btn btn-outline-primary btn-sm float-end">Top Rated</a>
                                <h5 class="mb-1">All Ratings and Reviews</h5>
                                
                                <div class="reviews-members pt-4 pb-4">
                                    <div class="media d-flex flex-row">
                                        <a href="#"><img alt="Generic placeholder image" src="http://bootdey.com/img/Content/avatar/avatar6.png" class="mr-3 rounded-pill"></a>
                                        <div class="ms-3">
                                            <div class="reviews-members-header">
                                                <span class="star-rating float-end">
                                                    <a href="#"><i class="bi bi-star-fill"></i></a>
                                                    <a href="#"><i class="bi bi-star-fill"></i></a>
                                                    <a href="#"><i class="bi bi-star-fill"></i></a>
                                                    <a href="#"><i class="bi bi-star-fill"></i></i></a>
                                                    <a href="#"><i class="bi bi-star"></i></i></a>
                                                    </span>
                                                <h6 class="mb-1"><a class="text-dark" href="#">Pasan Kalhara</a></h6>
                                                <p class="text-gray">Tue, 20 Mar 2020</p>
                                            </div>
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                            <div class="reviews-members-footer">
                                                <a class="total-like text-decoration-none" href="#"><i class="bi bi-hand-thumbs-up-fill pe-1"></i> 88K</a>
                                                <a class="total-like text-decoration-none" href="#"><i class="bi bi-hand-thumbs-down-fill pe-1"></i> 1K</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <a class="text-center w-100 d-block mt-4 font-weight-bold" href="#">See All Reviews</a>
                            </div>
                            <div class="bg-white rounded shadow-sm p-4 mb-5 rating-review-select-page">
                                <h5 class="mb-3">Leave Comment</h5>
                                <p class="mb-1">Rate the Place</p>
                                <div class="mb-2">
                                    <span class="star-rating">
                                        <a href="#"><i class="bi bi-star"></i></a>
                                        <a href="#"><i class="bi bi-star"></i></a>
                                        <a href="#"><i class="bi bi-star"></i></a>
                                        <a href="#"><i class="bi bi-star"></i></a>
                                        <a href="#"><i class="bi bi-star"></i></a>
                                    </span>
                                </div>
                                <form>
                                    <div class="form-group mb-4">
                                        <label>Your Comment</label>
                                        <textarea class="form-control"></textarea>
                                    </div>
                                    <div class="form-group mt-2">
                                        <button class="btn btn-primary btn-sm" type="button">Submit Comment</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include_once "../../Footer.php"; ?>
        </div>
        
    </main>

    <?php include_once "../../Scripts.php"; ?>
    
</body>
</html>