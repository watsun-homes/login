<?php

require_once('config.php');

//データベースに接続
$mysqli = new mysqli($host,$username,$password,$dbname);



//データベースの接続に失敗したら
if ($mysqli->connect_error) {
  error_log($mysqli->connect_error);
  exit();
}

?>