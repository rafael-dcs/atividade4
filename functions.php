<?php

function openConnection(){
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $db = "shopping";
    $conn = new mysqli($servername, $username, $password, $db);
    return $conn;
}

function getProducts(){
    $sql = "SELECT NAME, VALUE, IMAGE FROM products";
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
    $sql = "SELECT email, phone, facebook, address, district, city FROM contact";
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
    $sql = "SELECT title, text, image FROM about";
    $conn = openConnection();
    $result = $conn->query($sql);
    $conn->close();
    if($result->num_rows > 0){
        return $result;
    }else{
        return null;
    }
}