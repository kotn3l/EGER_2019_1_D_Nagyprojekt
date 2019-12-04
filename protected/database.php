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
 public function getUserstmt($queryString, $queryParams = []){
    $sql="SELECT * From users ";
    $statement=$this->connect()->prepare($sql);
    $statement->execute($queryParams);
    $names=$statement->fetchAll();
    foreach($names as $name){
      echo $name['username'].'<br>';
    }

     
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

  function getField($queryString, $queryParams = []){
    $connection = getConnection();   
    $statement = $connection->prepare($queryString);
    $success = $statement->execute($queryParams);
    $result = $success ? $statement->fetch()[0] : [];
    $statement->closeCursor();
    $connection = null;
    return $result;
  }

 ?>
