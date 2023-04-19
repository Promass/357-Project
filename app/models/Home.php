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

    public function getSchedulesForUser($uid) {
        $stmt = $this->_connection->prepare("SELECT R.id, R.longitude, R.latitude, R.descr, R.area
        FROM saved S, rules R
        WHERE S.uid = :uid AND S.sid = R.id;");
        $stmt->execute(['uid'=>$uid]);

        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Home');
        return $stmt->fetchAll();
    }
}

?>
