<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Now Playing</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/css/now.css"; ?>">
    </head>
<body>
<header>
    <a href="<?php echo site_url('dashboard')?>">
        <img class="logo" src="<?= base_url() . "/assets/images/logo.jpg"; ?>" style="border-radius: 25px;" width="40" height="35" alt="logo">
    </a>
    <nav>
        <ul class="nav_links">
            <li><a href="<?php echo site_url('booking/now') ?>">Now Playing</a></li>
            <li><a href="<?php echo site_url('booking/teater') ?>">Theaters</a></li>
            <li><a href="<?php echo site_url('booking/soon') ?>">Coming Soon</a></li>
            <li class="sorting">Feature
                <ul class="sorting-content">
                    <li><a href="<?php echo site_url('booking/sortByName/ascending')?>">Sort Movie by Ascending</a></li>
                    <li><a href="<?php echo site_url('booking/sortByName/descending')?>">Sort Movie by Descending</a></li>
                    <li><a href="<?php echo site_url('booking/filter'); ?>">Filter Movie</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <li class="dropdown"><a href="#"><button>Profile</button></a>
        <ul class="dropdown-content">
            <li><a href="<?php echo site_url('booking/EditUser') ?>">Edit Profile</a></li>
            <li><a href="<?php echo base_url() ?>index.php/dashboard/logout">Log Out</a></li>
        </ul>
    </li>
</header>
<div class="container">
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