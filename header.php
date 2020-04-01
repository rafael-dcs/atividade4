<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="includes/styles/mainStyle.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
        $(document).ready(function(){  
            $(".menuButton").click(function(){
                $(".menuList").toggle();
            });
        });
    </script>
    <title>Shopping</title>
</head>
<body>
    <header class="menu row">
        <div class="col-xs-2">
            <a title="SHOPPING" class="" href="index.php"><h1>SHOPPING</h1></a>
        </div>
        <nav class="col-xs-10">
            <img class="menuButton" src="includes/img/menu.png" alt="">
            <ul class="menuList">
                <li><a title="Home" href="index.php">Home</a></li>
                <li><a title="About Us" href="about.php">About Us</a></li>
                <li><a title="Shop" href="products.php">Shop</a></li>
                <li><a title="Faq" href="">Faq</a></li>
                <li><a title="Page" href="">Page</a></li>
                <li><a title="Contact" href="contact.php">Contact</a></li>
                <li><a title="My Cart" href=""><img src="includes/img/cart.png" alt=""></a></li>
            </ul>
        </nav>
    </header>