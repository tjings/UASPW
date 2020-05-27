<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.20/r-2.2.3/datatables.min.css"/> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/css/dashboard.css"; ?>">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-fixed-top" style="background-color: #005350;" >
    <button class="navbar-toggler"type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <img src="https://pngimage.net/wp-content/uploads/2018/06/white-menu-icon-png-8.png" width="40" height="35" class="d-inline-block-align-top" alt="Image Logo"/>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <a style="color: #FFFFFF" class="navbar-brand" href="<?php echo site_url('dashboard')?>">Home</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a style="color: #FFFFFF" class="nav-link text-light" href="<?php echo site_url('booking/now') ?>"> Now Playing</a>
            </li>
            <li class="nav-item">
                <a style="color: #FFFFFF" class="nav-link text-light" href="<?php echo site_url('booking/teater') ?>">Theaters</a>
            </li>
            <li class="nav-item">
                <a style="color: #FFFFFF" class="nav-link text-light" href="<?php echo site_url('booking/soon') ?>">Coming Soon</a>
            </li>
            <li class="nav-item">
                <a style="color: #FFFFFF" class="nav-link text-light" href="<?php echo site_url('booking/EditUser') ?>">User</a>
            </li>
        </ul>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <div class="navbar-form navbar-right">
            <a href="<?php echo base_url() ?>index.php/dashboard/logout" type="submit" class="btn btn-light"><i class="fa fa-sign-out"></i> Logout</a>
        </div>
    </div>
</nav>
<div class="container" style="margin-top: 80px">
    <div class="panel-body">
        Selamat Datang <b><?php echo $this->session->userdata("user_nama") ?></b> di halaman User System
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url() . "/assets/posters/bbfl.jpg"; ?>" class="d-block w-100" alt="dashboard1">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url() . "/assets/posters/boy1.jpg"; ?>" class="d-block w-100" alt="dashboard2">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url() . "/assets/posters/boy2.jpg"; ?>" class="d-block w-100" alt="dashboard3">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url() . "/assets/posters/fantasyisland.jpg"; ?>" class="d-block w-100" alt="dashboard4">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url() . "/assets/posters/charlies.jpg"; ?>" class="d-block w-100" alt="dashboard5">
            </div>
            <div class="carousel-item">
                <img src="<?= base_url() . "/assets/posters/endgame.jpg"; ?>" class="d-block w-100" alt="dashboard6">
            </div>
        </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
    </div>
</div>

</body>
</html>