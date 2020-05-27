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
    <div class="container" style="padding-top: 100px;">

        <div class="row"  style="box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.3);">
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