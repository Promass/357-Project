<?php

class HomeController extends Controller {

    public function index() {
        if (isset($_POST['Home-search'])) {
            $data = [];

            $place = $this->model('Home');
            $place->longitude = $this->stripCoordinates($_POST['Home-search-lng']);
            $place->latitude = $this->stripCoordinates($_POST['Home-search-lat']);
            
            $data['search'] = $_POST['Home-search-input'];
            $data['longitude'] = $_POST['Home-search-lng'];
            $data['latitude'] = $_POST['Home-search-lat'];
            $data['schedule'] = $place->getParkingSchedule();
            
            $this->view('Home/Index', $data);
        }
        else {
            $this->view('Home/Index');
        }
    }

    public function stripCoordinates($coordinates) {
        if ($coordinates[0] == '-') {
            return substr($coordinates, 0, 7);
        }
        else {
            return substr($coordinates, 0, 6);
        }
    }
}
