<?php

class AuthenticationController extends Controller {

    public function login() {

        if (isset($_POST['login'])) {
            if ($_POST['username'] != "" and $_POST['password'] != "") {
                $authentication = $this->model('Authentication');
                $authentication->username = $_POST['username'];
                $authentication->password = $_POST['password'];
                $user = $authentication->loginUser();

                if ($user) {
                    $_SESSION['user_id'] = $user->id;
                    $_SESSION['username'] = $user->username;
                    header('location: /Home/Index');
                }
                else {
                    header('location: /Authentication/Login');
                }
            }
        }
        else {
            $this->view('Authentication/Login');
        }
    }

    public function register() {
        if (isset($_POST['signup'])) {
            if ($_POST['username'] != "" and $_POST['password'] != "") {
                $authentication = $this->model('Authentication');
                $authentication->username = $_POST['username'];
                $authentication->password = $_POST['password'];
                $authentication->signupUser();

                header('location: /Authentication/Login');
            }
            else {
                header('location: /Authentication/Register');
            }
        }
        else {
            $this->view('Authentication/Register');
        }
    }

    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        header("Location: /");
    }

}
