<?php

  require_once('C:\Users\Nasha\Downloads\PHP_exer_files\Ex_Files_PHP_MySQL_EssT_2_CMS_2021\Exercise_Files\Chapter_06\06_06\globe_bank\private\db_credentials.php');

  function db_connect() {
    $connection = mysqli_connect('localhost','webuser','secretpassword','globe_bank');
    confirm_db_connect();
    return $connection;
  }

  function db_disconnect($connection) {
    if(isset($connection)) {
      mysqli_close($connection);
    }
  }

  function db_escape($connection, $string) {
    return mysqli_real_escape_string($connection, $string);
  }

  function confirm_db_connect() {
    if(mysqli_connect_errno()) {
      $msg = "Database connection failed: ";
      $msg .= mysqli_connect_error();
      $msg .= " (" . mysqli_connect_errno() . ")";
      exit($msg);
    }
  }

  function confirm_result_set($result_set) {
    if (!$result_set) {
    	exit("Database query failed.");
    }
  }

?>
