<?php
//adatb kapcs létrehozás
  function getConnection()
  {
    $dsn=DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME;
    $connection = new PDO($dsn, DB_USER, DB_PASS);
    $connection->exec("SET NAMES 'utf8'");
    return $connection;
  }
 ?>
