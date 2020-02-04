<?php
 class Database {
private $host = "localhost";
private $db_user = "root";
private $db_psw = "root";
private $db_name = "ITS";
private $mysqli;

    public function connect() {
    $mysqli = new mysqli($this->host, $this->db_user, $this->db_psw);
    if ($mysqli->connect_error) {
        die('Errore di connessione ('.$mysqli->connect_errono.')'.$mysqli->connect_error);
        } else {
            echo 'Connesso. '.$mysqli->host_info."\n";
            $this->mysqli->query("USE ".$this->db_name);
        }

    }
     public function getConnect() {
         return $this->mysqli;
     }
    public function close() {
        $this->mysqli->close();
    }
}

?>