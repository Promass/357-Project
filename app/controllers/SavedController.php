<?php

class SavedController extends Controller {

    public function index() {
        if (isset($_SESSION['user_id'])) {
            $home = $this->model('home');
            $data = $home->getSchedulesForUser($_SESSION['user_id']);

            $this->view('Saved/Index', $data);
        }
        else {
            headear('location: /Authentication/Login');
        }
    }

    public function save($sid) {
        $saved = $this->model('saved');
        $saved->uid = $_SESSION['user_id'];
        $saved->sid = $sid;
        $saved->saveSchedule();

        header('location: /Home/Index');
    }

    public function delete($sid) {
        $saved = $this->model('saved');
        $saved->uid= $_SESSION['user_id'];
        $saved->sid = $sid;
        $saved->removeSavedSchedule();

        header('location: /Saved/Index');
    }
}
