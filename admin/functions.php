<?php

function login($username, $password){
    $sql = "SELECT users.USERNAME FROM users WHERE users.USERNAME='{$username}' AND users.PASSWORD='{$password}' ";
    $conn = openConnection();
    $result = $conn->query($sql);
    $conn->close();
    if($result->num_rows > 0){
        return $result->fetch_assoc()['USERNAME'];
    }else{
        return null;
    }
}

function openConnection(){
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $db = "shopping";
    $conn = new mysqli($servername, $username, $password, $db);
    return $conn;
}


/*
session_start();

if(!isset($_SESSION['login']) || $_SESSION['login'] !== 'admin'){
    if(isset($_POST['login']) && $_POST['login'] !== null){
        if($_POST['user'] === 'admin' && $_POST['pass'] === 'admin'){
            $_SESSION['login'] = 'admin';
            $_GET['page'] = null;
        }
    }else{
        header('Location: login.php');
    }
}

if(isset($_GET['page']) && $_GET['page'] === 'logout'){
    unset($_SESSION['login']);
    header('Location: http://ijcoinf19/projeto4/');
}
*/