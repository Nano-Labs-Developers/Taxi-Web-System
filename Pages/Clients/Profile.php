<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "../../Header.php"; ?>

    <link href="/src/lib/css/sidebar.css" rel="stylesheet">
</head>

<body class="bg-light">
    <main>
        <?php include_once "../../components/clients/sidebar.php"; ?>
        
        <div class="container rounded mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                        <span class="font-weight-bold">Pasan Kalhara</span>
                        <span class="text-black-50">example@email.com</span><span> </span></div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control" placeholder="name" value=""></div>
                            <div class="col-md-12 mt-2"><label class="labels">Username</label><input type="text" class="form-control" placeholder="username" value="" disabled></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="071 555 5555" value=""></div>
                            <div class="col-md-12 mt-2"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="example@email.com" value=""></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Current Password</label><input type="text" class="form-control" placeholder="current password" value=""></div>
                            <div class="col-md-12 mt-2"><label class="labels">New Password</label><input type="text" class="form-control" placeholder="new password" value=""></div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Other Details</h4>
                        </div>

                        <?php
                            $role="d";
                            // driver
                            if($role=="d"){
                                echo '
                                    <div class="row mt-3">
                                        <div class="col-md-12"><label class="labels">Vehicle Type</label><input type="text" class="form-control" placeholder="vehicle type" value=""></div>
                                        <div class="col-md-12 mt-2"><label class="labels">Vehicle Make</label><input type="text" class="form-control" placeholder="vehicle make" value=""></div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12 mt-2"><label class="labels">Vehicle Model</label><input type="text" class="form-control" placeholder="vehicle model" value=""></div>
                                        <div class="col-md-12 mt-2"><label class="labels">Work Hour</label><input type="text" class="form-control" placeholder="work hour" value=""></div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12 mt-2"><label class="labels">Work District</label><input type="text" class="form-control" placeholder="work district" value=""></div>
                                    </div>
                                ';
                            }
                            // client
                            elseif ($role=="c"){
                                
                            }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include_once "../../Footer.php"; ?>
    <?php include_once "../../Scripts.php"; ?>
    
</body>
</html>