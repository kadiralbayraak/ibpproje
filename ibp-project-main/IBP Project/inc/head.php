<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $Page ?>Hotel</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>

<!-- Navbar -->
<header>
    <a href="index.php" class="logo"><img src="images/logo.png" alt="">Luxury Hotel</a>

    <div class="bx bx-menu" id="menu-icon"></div>

    <ul class="navbar">
        <li><a href="index.php" <?php if($Page=="home") echo "active"?>>Home</a></li>
        <li><a href="rooms.php"<?php if($Page=="rooms") echo "active"?>>Rooms</a></li>
        <li><a href="rent.php"<?php if($Page=="rent") echo "active"?>>Rent</a></li>
        <li><a href="rezervation.php"<?php if($Page=="rezervation") echo "active"?> >Reservation</a></li>
        <li><a href="contact.php"<?php if($Page=="contact") echo "active"?> >Contact</a></li>
        <li><a href="logout.php"<?php if($Page=="logout") echo "active"?> >Logout</a></li>

    </ul>
    <div class="icons">
        <a href="login.php" class="fas fa-user-alt" target="_blank"></a>
    </div>
</header>

