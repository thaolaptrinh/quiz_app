<?php

class DB
{

  private $servername = 'localhost';
  private $username = 'root';
  private $password = '';
  private $dbname = 'quiz_app';
  private $port = '2003';

  private $conn;

  public function connect()
  {
    # code...
    $this->conn = null;

    if (!$this->conn) {
      try {
        $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname;port=$this->port", $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
    }
    return $this->conn;
  }

  public function dis_connect()
  {
    $this->conn = null;
  }
  # code...

}
