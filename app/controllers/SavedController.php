<?php

class SavedController extends Controller {

    public function index() {

        if (isset($_SESSION['user_id'])) {
            $this->view('Saved/Index');
        }
        else {
            headear('location: /Authentication/Login');
        }
       
    }

    public function save($sid) {
        $saved = $this->model('Saved');
        $saved->uid = $_SESSION['user_id'];
        $saved->sid = $sid;
        $saved->saveSchedule();

        header('location: /Home/Index');
    }
}
