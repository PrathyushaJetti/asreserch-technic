<?php
define('ROOT_PATH', 'http://localhost/asreserch-technic/');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php $title = isset($meta['title']) ? $meta['title'] : 'AS Reserch Technic';
    echo $title; ?></title>
    <meta name="description" content="<?php
    $title = isset($meta['description']) ? $meta['description'] : 'AS Reserch Technic';
    echo $meta['description']; ?>">
    <meta name="keywords" content="<?php
    $title = isset($meta['keywords']) ? $meta['keywords'] : 'AS Reserch Technic';
    echo $meta['keywords']; ?>">
    <!-- Page Title -->
    <title>AS Research Technic </title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= ROOT_PATH ?>image/logo.png">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap"
        rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="<?= ROOT_PATH ?>css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="<?= ROOT_PATH ?>css/slicknav.min.css" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="<?= ROOT_PATH ?>css/swiper-bundle.min.css">
    <!-- Font Awesome Icon Css-->
    <link href="<?= ROOT_PATH ?>css/all.css" rel="stylesheet" media="screen">

    <!-- Animated Css -->
    <link href="<?= ROOT_PATH ?>css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="<?= ROOT_PATH ?>css/magnific-popup.css">
    <!-- Main Custom Css -->
    <link href="<?= ROOT_PATH ?>css/custom.css" rel="stylesheet" media="screen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body class="tt-magic-cursor">

    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon">
                <img src="<?= ROOT_PATH ?>image/logo.png" alt="logo"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Magic Cursor Start -->
    <div id="magic-cursor">
        <div id="ball">
            
            
        </div>
    </div>
    
    <!-- Magic Cursor End -->

    <!-- Header Start -->
    <header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="<?= ROOT_PATH ?>index.php">
                        <img src="<?= ROOT_PATH ?>image/logo.png" class="logo-head" alt="Logo">
                    </a>
                    <!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="<?= ROOT_PATH ?>index.php">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?= ROOT_PATH ?>about.php">about us</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?= ROOT_PATH ?>services.php">services</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Categories</a>
                                    <ul>
                                        <li class="nav-item"><a class="nav-link" href="<?= ROOT_PATH ?>categories/commodity.php">Commodities </a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?= ROOT_PATH ?>categories/currency.php">Currency</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?= ROOT_PATH ?>categories/optiontrading.php">Option Trading</a></li>
                                        <li class="nav-item"><a class="nav-link" href="<?= ROOT_PATH ?>categories/cashmarketlongterm.php">Cash Market Long term </a>
                                        </li>
                                        

                                    </ul>
                                </li>
                               
                                <li class="nav-item"><a class="nav-link" href="#">performance</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?= ROOT_PATH ?>#">Reserch And Analysis</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?= ROOT_PATH ?>contact.php">Contact Us</a></li>

                               
                            </ul>
                        </div>
                        <!-- Let’s Start Button Start -->
                        <div class="header-btn d-inline-flex">
                            <a href="<?= ROOT_PATH ?>forms.php" class="btn-default">book now</a>
                           
                        </div>
                        <!-- Let’s Start Button End -->
                    </div>
                    <!-- Main Menu End -->

                    <div class="navbar-toggle"></div>
                </div>
            </nav>
            <div class="responsive-menu"></div>
        </div>
    </header>