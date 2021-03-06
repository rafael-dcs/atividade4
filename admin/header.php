<?php require_once "functions.php"; ?>
<?php internalSessionControl(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="includes/styles/adminStyle.css" type="text/css">
    <title>Admin</title>
</head>
<body>
    <header>
        <h1><a title="Home" href="http://ijcoinf19/projeto4/">SHOPPING</a></h1>
        <section>
            <figure>
                <img src="includes/img/user.png" alt="">
                <figcaption>
                    <h2>Admin</h2>
                </figcaption>
            </figure>
        </section>
        <nav>
            <ul>
                <li><a title="Dashboard" href="http://ijcoinf19/projeto4/admin/">Dashboard</a></li>
                <li><a title="Products" href="http://ijcoinf19/projeto4/admin/?page=products">Products</a></li>
                <li><a title="About us" href="http://ijcoinf19/projeto4/admin/?page=about">About us</a></li>
                <li><a title="Contact" href="http://ijcoinf19/projeto4/admin/?page=contact">Contact</a></li>
                <li><a title="Logout" href="http://ijcoinf19/projeto4/admin/?page=logout">Logout</a></li>
            </ul>
        </nav>
    </header>