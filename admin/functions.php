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

function getProducts(){
    $sql = "SELECT products.ID, products.NAME, products.VALUE FROM products";
    $conn = openConnection();
    $result = $conn->query($sql);
    $conn->close();
    if($result->num_rows > 0){
        return $result;
    }else{
        return null;
    }
}

function saveAbout(){
    $title = $_POST["title"];
    $about = $_POST["about"];
    $image = $_FILES["image"]["name"];
    $sql = "UPDATE about SET title='{$title}', `text`='{$about}', `image`='{$image}'";
    $conn = openConnection();
    $result = $conn->query($sql);
    if(!$conn->error){
        move_uploaded_file($_FILES["image"]["tmp_name"], "includes/img/" . $image);
    }
    $conn->close();
}

function saveContact(){
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $face = $_POST["face"];
    $address = $_POST["address"];
    $district = $_POST["district"];
    $city = $_POST["city"];
    $sql = "UPDATE contact SET email='{$email}', phone='{$phone}', facebook='{$face}', `address`='{$address}', district='{$district}', `city`='{$city}'";
    $conn = openConnection();
    $result = $conn->query($sql);
    $conn->close();
}

function newProduct(){
    $name = $_POST["name"];
    $value = $_POST["value"];
    $image = $_FILES["image"]["name"];
    $sql = "INSERT INTO products (`NAME`, `VALUE`, `IMAGE`) VALUES ('{$name}', '{$value}', '{$image}') ";
    $conn = openConnection();
    $result = $conn->query($sql);
    if(!$conn->error){
        move_uploaded_file($_FILES["image"]["tmp_name"], "includes/img/" . $image);
    }
    $conn->close();
}

function editProduct($id){
    $name = $_POST["name"];
    $value = $_POST["value"];
    $image = $_FILES["image"]["name"];
    $sql = "UPDATE products SET `NAME`='{$name}', `VALUE`='{$value}', `IMAGE`='{$image}' WHERE ID={$id}";
    $conn = openConnection();
    $result = $conn->query($sql);
    if(!$conn->error){
        move_uploaded_file($_FILES["image"]["tmp_name"], "includes/img/" . $image);
    }
    $conn->close();
}

function deleteProduct($id){
    $sql = "DELETE FROM products WHERE ID={$id}";
    $conn = openConnection();
    $result = $conn->query($sql);
    $conn->close();
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