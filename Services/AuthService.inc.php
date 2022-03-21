<?php
    require_once "../../../models/DataContext.inc.php";

    class AuthService
    {
        private $db;

        public function __construct()
        {
            $conn = new DataContext();
            $this->db = $conn->db();
        }

        public function login($username, $password)
        {
            $query = $this->db->query("SELECT * FROM user WHERE username = '$username' LIMIT 1");

            while($current_user = $query -> fetch_assoc()) {
                if ($current_user['status'] == 0) {
                    echo '<p class="d-flex justify-content-center links" style="color:red; text-align:center;">Your account is inactivated. Please contact Administration.</p>';
                    die;
                }
                
                if ($current_user['total'] == 1 && $this -> verifyPassword($password, $current_user['password']) == TRUE) {
                    session_start();
                    $uid = $current_user['id']; // user id
                    $_SESSION['userID'] = $uid;
                    $_SESSION['name'] = $current_user['name'];
                    $_SESSION['identity'] = $current_user['role'];
                    $_SESSION['is_logged'] = TRUE;
                    if (!isset($_SESSION['availability'])) {
                        $_SESSION['availability'] = "Available";
                    }

                    if($current_user['role'] == 'Customer') {
                        $query = $this->db->query("SELECT * FROM customer WHERE userID = '$uid' LIMIT 1");

                        while($current_customer = $query -> fetch_assoc()) {
                            $_SESSION['client_id'] = $current_customer['id'];
                            $_SESSION['name'] = $current_customer['name'];
                        }

                        header("Location: /c/dashboard");
                    }
                    else if ($current_user['role'] == 'Driver') {
                        $query = $this->db->query("SELECT * FROM driver WHERE userID = '$uid' LIMIT 1");

                        while($current_driver = $query -> fetch_assoc()) {
                            $_SESSION['driverID'] = $current_driver['id'];
                            $_SESSION['name'] = $current_driver['name'];
                        }

                        header("Location: /d/dashboard");
                    } else {
                        // redirect to 404 or something
                        header("Location: /error");
                        die;
                    }
                }
                else {
                    echo '<p class="d-flex justify-content-center links" style="color:red; text-align:center;">Invalid user credentials.</p>';
                }
            }
        }

        public function verifyPassword($password, $enc_password)
        {
            if(password_verify($password, $enc_password)) return TRUE;
        }

        public function regDriver($email)
        {
            $query = $this->db->query("");

        }

        public function regClient($email)
        {
            $query = $this->db->query("");
            
        }

        public function userEmailExists($email)
        {
            $query = $this->db->query("SELECT email FROM user WHERE email = '$email'");
            if($query->num_rows == 1) {
                return TRUE;
            }
            else return FALSE;
        }

        public function Hash($password)
        {
            $hash_pass = password_hash($password, PASSWORD_DEFAULT);
            return $hash_pass;
        }
    }

?>