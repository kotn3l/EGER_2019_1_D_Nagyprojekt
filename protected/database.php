<?php
//adatb kapcs létrehozás
  function getConnection()
  {
    $dsn=DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME;
    $connection = new PDO($dsn, DB_USER, DB_PASS);
    $connection->exec("SET NAMES 'utf8'");
    return $connection;
  }
  //listázás
  function getList($queryString, $queryParams = array())
  {
    $connection = getConnection();
    $statement = $connection->prepare($queryString);
    $success = $statement->execute($queryParams);

    $result = array();
    if($success){
        $result = $statement->fetchAll();
    }
    $statement->closeCursor();
    $connection = null;

    return $result;
  }
  
  function getRecord($queryString, $queryParams = []){
    $connection = getConnection();  
    $statement = $connection->prepare($queryString);
    $success = $statement->execute($queryParams);
    $result = $success ? $statement->fetch() : [];
    $statement->closeCursor();
    $connection = null;
    return $result;
  }

  function executeDML($queryString, $queryParams = []){
    $connection = getConnection();  
    $statement = $connection->prepare($queryString);
    $success = $statement->execute($queryParams);
    $statement->closeCursor();
    $connection = null;
    return $success;
  }

 ?>
