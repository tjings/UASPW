<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Now Playing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="path/to/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/css/now.css"; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/css/kursi.css"; ?>">
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
    <form action="<?= site_url(). "/booking/search"; ?>" method="GET">
        <input type="text" name="search" placeholder="Search...">
        <button type="submit"style="background-color: transparent; min-width:0px; margin-left:90%;"><i class="zmdi zmdi-search" style="color: white;"></i></button>
    </form>
    <li class="dropdown"><a href="#"><button>Profile</button></a>
        <ul class="dropdown-content">
            <li><a href="<?php echo site_url('booking/EditUser') ?>">Edit Profile</a></li>
            <li><a href="<?php echo base_url() ?>index.php/dashboard/logout">Log Out</a></li>
        </ul>
    </li>
</header>
    <main>
        <section class="cards">
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
            <div class="card">
                <div class="card__image-container">
                <a href="<?=$pathToOrder?>">
                    <img style="height: 500px;" src="<?= $movie ?>">
                </a>
                </div>
                <div class="card__content">
                    <p class="card__title text--medium"><?=$name ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </section>   
    </main>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.20/r-2.2.3/datatables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() . "assets/js/script.js" ?>"></script>
    </body>
</html>