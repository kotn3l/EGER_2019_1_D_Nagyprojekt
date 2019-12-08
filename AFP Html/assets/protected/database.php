<?php
/*
    A lekérdezések végrehajtásához szükséges függvények.
    Cél, hogy máshonnan átadva a lekérdezés szövegét és paramétereit,
    megtörténjen a végrehajtás
*/ 

function getConnection() {
    $connection = new PDO(DB_TYPE.':host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME.';',DB_USER, DB_PASS);
    $connection->exec("SET NAMES '".DB_CHARSET."'");
    return $connection;
}

function getRecord($queryString, $queryParams = []){
    // Csatlakozunk az adatbázisunkho.
    $connection = getConnection();  
    // A paraméterben kapott queryStringből készítek egy utasítást
    $statement = $connection->prepare($queryString);
    // Végrehajtjuk az utasítást a megadott paraméterekkel
    $success = $statement->execute($queryParams);
    // Ha az utasításunk sikeresen lefutott, akkor a választ olvassuk és tároljuk
    $result = $success ? $statement->fetch() : [];
    // Lezárom az utasítás végrehajtását
    $statement->closeCursor();
    // Lezárom a kapcsolatot
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

function getList($queryString, $queryParams = []){
    $connection = getConnection();  
    $statement = $connection->prepare($queryString);
    $success = $statement->execute($queryParams);
    $result = $success ? $statement->fetchAll() : [];
    $statement->closeCursor();
    $connection = null;    
    return $result;
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
