<?php
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
    header('Location: http://localhost/projeto4/');
}