<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid ms-5 me-2">
        <a class="navbar-brand" href="/home">
            <img src="/assets/favicon/favicon-96x96.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            City Taxi
        </a>
        <button class="navbar-toggler sticky-top" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/book">Ride</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/drive">Driver</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
            <?php

                if(!isset($_SESSION['username']) && !isset($_SESSION['identity']) && !isset($_SESSION['user_id']) && !isset($_SESSION['is_logged'])) {
                    echo '<form class="d-flex" action="/login">
                            <button class="btn btn-outline-success" type="submit">Login</button>
                        </form>
                    ';
                }

            ?>
        </div>
    </div>
</nav>