<?php

class AuthenticationController extends Controller {

    public function index() {

        if (isset($_POST['login'])) {
            if ($_POST['username'] != "" and $_POST['password'] != "") {
                $authentication = $this->model('Authentication');
                $authentication->username = $_POST['username'];
                $authentication->password = $_POST['password'];
                $user = $authentication->loginUser();

                if ($user) {
                    $_SESSION['user_id'] = $user->id;
                    $_SESSION['username'] = $user->username;
                    $_SESSION['u_type'] = $user->u_type;

                    if ($_SESSION['u_type'] == 2) {
                        header('location: /Home/Index');
                    }
                    else if ($_SESSION['u_type'] == 1) {
                        header('location: /Ticket/Pending');
                    }
                }
                else {
                    header('location: /Authentication/Index');
                }
            }
        }
        else {
            $this->view('Authentication/Index');
        }
    }

    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['u_type']);
        header("Location: /");
    }

}
