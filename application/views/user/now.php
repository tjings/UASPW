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
<nav class="navbar navbar-expand-lg navbar-fixed-top" style="background-color: #005350;" >
    <a style="color: #FFFFFF" class="navbar-brand" href="<?php echo site_url('dashboard')?>">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a style="color: #FFFFFF" class="nav-link" href="<?php echo site_url('booking/now') ?>"> Now Playing <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a style="color: #FFFFFF" class="nav-link" href="<?php echo site_url('booking/teater') ?>">Theaters <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a style="color: #FFFFFF" class="nav-link" href="<?php echo site_url('booking/soon') ?>">Coming Soon <span class="sr-only">(current)</span></a>
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

        <div class="row">
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
                <div class="card mb-3">
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