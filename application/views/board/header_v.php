<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="apple-mobile-wep-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <title>CodeIgniter</title>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="/mbd/include/js/jquery-3.0.0.min.js"></script>
    <link rel='stylesheet' href="/mbd/include/css/bootstrap.css" />
    <link href="/mbd/include/css/custom.css" rel="stylesheet">
    <style>
        .mbd_top{
            margin-top:50px;
        }
        .mbd_form{
            text-align: center;
            width:  50%;
            margin: 0 auto;
        }

        .mbd_margin{
            marign-top: 80px;
            margin-bottom: 80px;
        }

        .mbd_space{
            margin-left: 10px;
        }
    </style>
    <script src="/mbd/include/ckeditor/ckeditor.js"></script>
</head>
<body>

<div class="container">
    <header id="header" data-role="header" data-position="fixed">
        <header id="header" data-role="header" data-position="fixed">
            <ul class="nav nav-tabs">
                <li><a href="/mbd/home">HOME</a></li>
                <li><a href="/mbd/night/night_list">LIST</a></li>
                <li><a href="/mbd/night/night_request">REQUEST</a></li>
                <li class="active"><a href="/mbd/board/lists"/>BOARD</a></li>
                <?php
                if( $this->session->userdata('logged_in')==TRUE) {
                    ?>
                    <li><a href="/mbd/auth/logout">LOGOUT</a></li>
                    <?php
                }
                ?>
                <a class="navbar-brand navbar-right" href="/mbd/home">
                    <img alt="brand" src="/mbd/include/img/dgsw_logo.png">
                </a>
            </ul>
        </header>
    </header>