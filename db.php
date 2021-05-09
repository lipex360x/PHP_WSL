<?php 
  $host = '127.0.0.1';
  $port = 3306;
  $user = 'dev_user';
  $pass = 'dev_pass';
  $db = 'test_db';

  $conn = new mysqli($host, $user, $pass, $db, $port);

  if($conn->connect_error) {
    echo 'connection failed ' . $conn->connect_error;
    return;
  }

  echo 'Successfully connected to MYSQL';

?>