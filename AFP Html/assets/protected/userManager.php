<?php
function IsUserLoggedIn(){
    return $_SESSION != null && array_key_exists('uid', $_SESSION) && is_numeric($_SESSION['uid']);
}
function IsUserAdmin(){
    return $_SESSION != null && array_key_exists('admin', $_SESSION) && is_numeric($_SESSION['admin']);
}
function getUserName(){
    if ($_SESSION != null && array_key_exists('name', $_SESSION)) {
        return $_SESSION['name'];
    }
}

function UserLogout(){
    session_unset();
    session_destroy();
    header('Location:'.BASE_DIR);
}

function UserLogin($username, $password){
    $query = "SELECT id, username, name, email, admin FROM users WHERE username = :username AND password = :password limit 1";
    $queryParams = [
        ':username' => $username,
        ':password' => sha1($password)
    ];

    require_once PROTECTED_DIR.'database.php';  
    $record = getRecord($query, $queryParams);
    if(!empty($record)) {
        $_SESSION['uid'] = $record['id'];
        $_SESSION['uame'] = $record['username'];
        $_SESSION['name'] = $record['name'];
        $_SESSION['email'] = $record['email'];

        if ($record['admin'] == 1) {
            $_SESSION['admin'] = $record['admin'];
            header('Location:?P=admin');
        } else {
            header('Location:?P=home');
        }
        
    }
    return false;
}

function UserRegister($username, $password, $name, $email){
    $query = "SELECT id FROM users WHERE username = :username OR email = :email";
    $queryParams = [
        ':username' => $username,
        ':email' => $email
    ];

    require_once PROTECTED_DIR.'database.php';  
    $record = getList($query, $queryParams);
    if(empty($record)) {
        $query = "INSERT INTO `users` (`username`, `password`, `name`, `email`) VALUES (:username, :password, :name, :email)";
        $queryParams = [
            ':username' => $username,
            ':password' => sha1($password),
            ':name' => $name,
            ':email' => $email
        ];

        if(executeDML($query, $queryParams))
            header('Location:'.BASE_DIR);
    }
    return false;
}
