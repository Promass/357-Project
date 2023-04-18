<?php

class Saved extends Model {

    public $id;
    public $uid;
    public $sid;

    public function saveSchedule() {
        $stmt = $this->_connection->prepare("SELECT * FROM rules WHERE longitude LIKE :longitude AND latitude LIKE :latitude LIMIT 1;");
        $stmt->execute(['longitude'=>($this->longitude.'%'), 'latitude'=>($this->latitude.'%')]);

        $stmt->setFetchMode(PDO::FETCH_CLASS, "Home");
        return $stmt->fetch();
    }

    public function getSchedulesForUser() {
        $stmt = $this->_connection->prepare("SELECT * FROM rules WHERE longitude LIKE :longitude AND latitude LIKE :latitude LIMIT 1;");
        $stmt->execute(['longitude'=>($this->longitude.'%'), 'latitude'=>($this->latitude.'%')]);

        $stmt->setFetchMode(PDO::FETCH_CLASS, "Home");
        return $stmt->fetch();
    }
}

?>
