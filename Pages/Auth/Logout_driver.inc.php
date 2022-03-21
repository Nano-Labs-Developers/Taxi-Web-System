<?php 
    session_start();
    if(isset($_SESSION['username'])) {
        setAvailability();
        session_destroy();
    }
    header("location: /home");

    function setAvailability() {
        require_once '../../../models/DataContext.inc.php';

        $conn = new DataContext();
        $db = $conn->db();

        $uid = $_SESSION['user_id'];
        $stmt = $db->prepare("UPDATE `driver` SET `availability`=? WHERE `userID`=?");
        $stmt->bind_param("ss", 3, $uid);

        if ($stmt->execute()) {
            $stmt->close();
        } else {
            
        }
    }
?>