<?php
class Question
{

  private $conn;



  public $question_id;
  public $question_title;
  public $question_a;
  public $question_b;
  public $question_c;
  public $question_d;
  public $question_true;


  public function __construct($conn)
  {
    # code...
    $this->conn = $conn;
  }

  public function read()
  {
    # code...
    $query = "SELECT * FROM `questions` ORDER BY question_id DESC";

    $stament = $this->conn->prepare($query);
    $stament->execute();
    return $stament;
  }
}
