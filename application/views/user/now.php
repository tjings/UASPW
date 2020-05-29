<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Now Playing</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/css/dashboard.css"; ?>">
    </head>
<body>
<nav class="navbar navbar-expand-lg navbar-fixed-top" style="background-color: #0C7A7A;" >
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
    <div class="container" style="padding-top: 100px;">
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Sorting
        </button>
        <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('booking/sortByName')?>">Sort Movie</a></li>
            <li><a href="#">....</a></li>
            <li><a href="#">....</a></li>
        </ul>
    </div>
        <div class="row" style="box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.3);">
            <?php foreach ((array) $data as $i) : 
                $id = $i['id_movie'];
                $name = $i['nama_movie'];
                $movie = base_url() . $i['poster_movie'];
                $genre = $i['genre_movie'];
                $usia = $i['minimal_usia'];
                $release = $i['release_date'];
                $lama = $i['waktu_film'];
                $ruangan = $i['id_ruangan'];
                $pathToOrder = site_url() . "/booking/showBooking?id=$id&ruangan=$ruangan";
                ?>
            <div class="col-md-4">
                <div class="card mb-3"style="box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.3);">
                    <a href="<?=$pathToOrder?>">
                        <img style="height: 500px;"src="<?= $movie ?>" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center"><?=$name ?></h5>
                        
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.20/r-2.2.3/datatables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() . "assets/js/script.js" ?>"></script>
    </body>
</html>