<?php
    require "checkLogin.php";
    require "header.php";
    if(isset($_GET['page'])){
        if($_GET['page'] === 'contact'){
            include "contact.php";
        }elseif($_GET['page'] === 'about'){
            include "about.php";
        }elseif($_GET['page'] === 'products'){
            include "products.php";
        }
    }else{
        include "dashboard.php";
    }
    require "footer.php";
?>