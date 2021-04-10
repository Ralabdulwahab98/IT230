<?php
  $db_connection = true;
  $credentials = [
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database_name' => 'college_partners'
  ];
  $mysqli = new mysqli(
    $credentials['host'],
    $credentials['username'],
    $credentials['password'],
    $credentials['database_name'],
  );
  if ($db_connection !== true){
    die ("The website is down.");
  } else if ($mysqli->connect_error){
      die("Cannot connect to database".$mysqli->connect_error);
  }

?>
