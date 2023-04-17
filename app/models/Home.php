<?php

class Home extends Model {

    public $id;
    public $longitude;
    public $latitude;
    public $decr;
    public $area;

    public function getParkingSchedule() {
        $stmt = $this->_connection->prepare("SELECT * FROM rules WHERE longitude LIKE :longitude AND latitude LIKE :latitude LIMIT 1;");
        $stmt->execute(['longitude'=>($this->longitude.'%'), 'latitude'=>($this->latitude.'%')]);

        $stmt->setFetchMode(PDO::FETCH_CLASS, "Home");
        return $stmt->fetch();
    }
}

?>
