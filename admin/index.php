<?php
    require_once "header.php";
    if(isset($_GET['page'])){
        if($_GET['page'] === 'contact'){
            include "contact.php";
        }elseif($_GET['page'] === 'about'){
            include "about.php";
        }elseif($_GET['page'] === 'products'){
            include "products.php";
        }elseif($_GET['page'] === 'logout'){
            unset($_SESSION['login']);
            header("Location: http://ijcoinf19/projeto4/");
        }
    }else{
        include "dashboard.php";
    }
    require "footer.php";
?>