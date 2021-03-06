<?php

function externalSessionControl(){
    if(session_id() == ""){
        session_start();
    }
    if(!isset($_SESSION['login'])){
        if(isset($_POST['login'])){
            $username = $_POST['user'];
            $password = $_POST['pass'];
            $_SESSION['login'] = login($username, $password);
            if($_SESSION['login'] != null){
                header('Location: index.php');
            }else{
                echo "<style>#loginError{display: block;}</style>";
            }
        }
    }else{
        header('Location: index.php');
    }
}

function internalSessionControl(){
    if(session_id() == ""){
        session_start();
    }
    if(!isset($_SESSION['login'])) header('Location: login.php');
}

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

function getContact(){
    $sql = "SELECT idcontact, email, phone, facebook, address, district, city FROM contact";
    $conn = openConnection();
    $result = $conn->query($sql);
    $conn->close();
    if($result->num_rows > 0){
        return $result;
    }else{
        return null;
    }
}

function getAbout(){
    $sql = "SELECT idabout, title, text FROM about";
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
    $sql = "UPDATE about SET title='{$title}', `text`='{$about}' ";
    $conn = openConnection();
    $conn->query($sql);
    if($image != null && $image !== ""){
        $sql = "UPDATE about SET image='{$image}' ";
        $conn = openConnection();
        $result = $conn->query($sql);
        if(!$conn->error){
            $dir = '../includes/img/';
            $file = $dir . $image;
            if(is_uploaded_file($_FILES['image']['tmp_name'])){
                file_put_contents($file, file_get_contents($_FILES['image']['tmp_name']));
            }
        }
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
        $dir = '../includes/img/';
        $file = $dir . $image;
        if(is_uploaded_file($_FILES['image']['tmp_name'])){
            file_put_contents($file, file_get_contents($_FILES['image']['tmp_name']));
        }
    }
    $conn->close();
}

function editProduct($id){
    $name = $_POST["name"];
    $value = $_POST["value"];
    $image = $_FILES["image"]["name"];
    $sql = "UPDATE products SET `NAME`='{$name}', `VALUE`='{$value}' WHERE ID={$id} ";
    $conn = openConnection();
    if(!$conn->query($sql)){
        die($conn->error);
    }

    if($image !== null && $image !== ""){
        $sql = "UPDATE products SET `IMAGE`='{$image}' WHERE ID={$id}";
        $conn = openConnection();
        $result = $conn->query($sql);
        if(!$conn->error){
            $dir = '../includes/img/';
            $file = $dir . $image;
            if(is_uploaded_file($_FILES['image']['tmp_name'])){
                file_put_contents($file, file_get_contents($_FILES['image']['tmp_name']));
            }
        }
    }

    $conn->close();
}

function deleteProduct($id){
    $sql = "DELETE FROM products WHERE ID={$id}";
    $conn = openConnection();
    $result = $conn->query($sql);
    $conn->close();
}