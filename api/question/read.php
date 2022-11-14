<?php

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');

include_once '../../config/database.php';
include_once '../../model/Question.php';


$DB = new DB;


$conn = $DB->connect();



$question = new Question($conn);

$read = $question->read();

$row = $read->rowCount();


if($row > 0){
   
}