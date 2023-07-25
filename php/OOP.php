<?php
class registration {
    public $hostname;
    public $username;
    public $password;
    public $dbname;
    public $connect;

    public function __construct($hostname, $username, $password, $dbname) {
        $this->hostname = $hostname;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
        $this->connect = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
        mysqli_set_charset($this->connect, 'utf8');
    }

    public function user($login, $password) {
        $password = md5(trim($password));
        mysqli_query($this->connect,"INSERT INTO users SET user_login='".$login."', user_password='".$password."'");
    }
    public function selectUsers() {
        $result = mysqli_query($this->connect, "SELECT user_login, user_password FROM users");
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}
?>