<?php

class Saved extends Model {

    public $id;
    public $uid;
    public $sid;

    public function saveSchedule() {
        $stmt = $this->_connection->prepare("INSERT INTO saved (uid, sid) VALUES (:uid, :sid);");
        $stmt->execute(['uid'=>$this->uid, 'sid'=>$this->sid]);

        return $stmt->rowCount();
    }

    public function removeSavedSchedule() {
        $stmt = $this->_connection->prepare("DELETE FROM saved WHERE uid = :uid AND sid = :sid;");
        $stmt->execute(['uid'=>$this->uid, 'sid'=>$this->sid]);

        return $stmt->rowCount();
    }
}

?>
