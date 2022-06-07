<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,700,800%7CIBM+Plex+Sans:200,300,400,400i,600,700">
    <link rel="stylesheet" href="/res/site2/bootstrap.css">
    <link rel="stylesheet" href="/res/site2/fonts.css">
    <link rel="stylesheet" href="/res/site2/style.css">
    <style>
        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }
        
        html.ie-10 .ie-panel,
        html.lt-ie-10 .ie-panel {
            display: block;
        }
    </style>
</head>

<body>
    <div class="page">
        <!-- Page Header-->
        <header class="section page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-minimal" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed"
                    data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px"
                    data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap-1"><span></span></button>
                                <!-- RD Navbar Brand-->
                                <a class="rd-navbar-brand" href="/"><img src="images/logo.png" width="1" height="1" srcset="images/logo.png" /></a>
                            </div>
                            <div class="rd-navbar-main-element">
                                <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
                                    <!-- RD Navbar Nav-->
                                    <ul class="rd-navbar-nav">
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="/profile/profile">Minha Conta</a>
                                        </li>
                                        <?php if( checkLogin(false) ){ ?>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="/profile/profile"><?php echo getUserName(); ?></a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="/logout">Sair</a>
                                        </li>
                                        <?php }else{ ?>
                                         <li class="rd-nav-item"><a class="rd-nav-link" href="/login">Login</a>
                                        </li>
                                        <?php } ?>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="/cart">Itens: <?php echo getCartNrQtd(); ?></a>
                                        </li>

                                    </ul>
                                </div>
                                <!-- RD Navbar Search-->
                                <div class="rd-navbar-search">
                                    <a class="nav-icon" href="#">
                                        <svg id="Layer_1" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="17px" height="17px" viewBox="0 0 17 17" enable-background="new 0 0 17 17" xml:space="preserve">
                        <path fill="none" stroke="" stroke-miterlimit="0" d="M4.775,0.588H0.708v4.286"></path>
                        <polyline fill="none" stroke="" stroke-miterlimit="0" points="16.552,4.654 16.552,0.588 12.485,0.588 "></polyline>
                        <polyline fill="none" stroke="" stroke-miterlimit="0" points="12.485,16.432 16.552,16.432 16.552,12.525 "></polyline>
                        <polyline fill="none" stroke="" stroke-miterlimit="0" points="0.708,12.577 0.708,16.432 4.722,16.432 "></polyline>
                        <path fill="none" stroke="" stroke-miterlimit="10" d="M0.708,8.404"></path>
                        <path fill="none" stroke="" stroke-miterlimit="10" d="M40.875,37.651"></path>
                        <path fill="none" stroke="" stroke-miterlimit="10" d="M8.313-0.151"></path>
                        <path fill="none" stroke="" stroke-miterlimit="10" d="M37.574,10.094"></path>
                        <path fill="none" stroke="" stroke-miterlimit="10" d="M0.067,10.094"></path>
                        <path fill="none" stroke="" stroke-miterlimit="10" d="M0.708,4.707"></path>
                        <path fill="none" stroke="" stroke-miterlimit="10" d="M16.552,4.655"></path>
                        <path fill="none" stroke="" stroke-miterlimit="10" d="M16.816,12.524"></path>
                        <path fill="none" stroke="" stroke-miterlimit="10" d="M0.708,12.577"></path>
                        <path fill="none" stroke="" stroke-miterlimit="10" d="M4.722,16.432"></path>
                        <path fill="none" stroke="" stroke-miterlimit="10" d="M4.734,12.886"></path>
                        <path fill="none" stroke="" stroke-miterlimit="10" d="M4.76,4.9"></path>
                        <path fill="none" stroke="" stroke-miterlimit="10" d="M4.775,0.905"></path>
                        <path fill="none" stroke="" stroke-miterlimit="10" d="M12.485,16.432"></path>
                        <path fill="none" stroke="" stroke-miterlimit="10" d="M12.485,0.905"></path>
                        <circle fill="" stroke="" stroke-miterlimit="10" cx="8.63" cy="8.193" r="0.911"> </circle>
                      </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
  