<?php
    require_once "../../../models/Database.inc.php";

    class Authenticator
    {
        private $db;

        public function __construct()
        {
            $conn = new Database();
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
                    $_SESSION['user_id'] = $uid;
                    $_SESSION['username'] = $current_user['username'];
                    $_SESSION['identity'] = $current_user['role'];
                    $_SESSION['is_logged'] = TRUE;

                    if($current_user['role'] == '239409') {
                        $query = $this->db->query("SELECT * FROM customer WHERE userID = '$uid' LIMIT 1");

                        while($current_customer = $query -> fetch_assoc()) {
                            $cid = $current_customer['id']; // client id
                            $_SESSION['client_id'] = $id;
                            $_SESSION['name'] = $current_customer['name'];
                        }

                        header("Location: /c/dashboard");
                    }
                    else if ($current_user['role'] == '624309') {
                        $query = $this->db->query("SELECT * FROM driver WHERE userID = '$uid' LIMIT 1");

                        while($current_driver = $query -> fetch_assoc()) {
                            $did = $current_driver['id']; // driver id
                            $_SESSION['driver_id'] = $id;
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