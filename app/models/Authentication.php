<?php

class Authentication extends Model {

    public $id;
    public $username;
    public $password;

    public function loginUser() {
        $stmt = $this->_connection->prepare("SELECT * FROM users WHERE username = :username AND password = :password;");
        $stmt->execute(['username'=>$this->username, 'password'=>$this->password]);

        $stmt->setFetchMode(PDO::FETCH_CLASS, "Authentication");
        return $stmt->fetch();
    }

    public function signupUser() {
        $stmt = $this->_connection->prepare("INSERT INTO users (username, password) VALUES (:username, :password);");
        $stmt->execute(['username'=>$this->username, 'password'=>$this->password]);

        return $stmt->rowCount();
    }
}

?>
