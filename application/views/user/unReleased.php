<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Book</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/css/booking.css"; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/css/now.css"; ?>">
    <script type="text/javascript" src="<?php echo base_url() . "assets/js/booking.js"; ?>"></script>
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
        </ul>
    </nav>
    <li class="dropdown"><a href="#"><button>Profile</button></a>
        <ul class="dropdown-content">
            <li><a href="<?php echo site_url('booking/EditUser') ?>">Edit Profile</a></li>
            <li><a href="<?php echo base_url() ?>index.php/dashboard/logout">Log Out</a></li>
        </ul>
    </li>
</header>
<div class="container-booking">
  <div class="containerr">
  <?php
    $id = $movie['id_movie'];
    $nama = $movie['nama_movie'];
    $poster = base_url() . $movie['poster_movie'];
    $genre = $movie['genre_movie'];
    $sinopsis = $movie['sinopsis'];
    $usia = $movie['minimal_usia'];
    $release = date("d M Y", strtotime($movie['release_date']));
    $lama = $menit;
    $harga = $movie['harga_movie'];
    $ruangan = $movie['id_ruangan'];
	$trailer = $movie['trailer'];
  ?>

    <div class="panel-heading">
      <div class="row" style="margin: 0px; padding: 0px;">
        <div class="col-xs-8 col-sm-11 col-md-11" style="font-weight: bold">
          <?php echo "<h1>$nama</h1>"; ?>
        </div> 
        <div class="col-xs-8 col-sm-11 col-md-11">
          <?php echo "<p>$genre</p>";?>
        </div> 
      </div>
      <hr>
    </div>

    <div style="margin-bottom: 0px; min-height: 200px; padding: 10px;">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6">
          <?php echo "<img src='$poster' style='margin-right:10px; margin-bottom:10px; width: 99%;'>"; ?>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="row" style="max-width: 200px; margin-left:20px;">
            <p><span class="glyphicon glyphicon-time"></span><?php echo " $lama Minutes" ?></p>
          </div>
          <div class="row" style="max-width: 200px; margin-left:20px;">
            <p><?php echo "Rp $harga"?></p>
          </div>
          <div class="row" style="max-width: 200px; margin-left:20px;">
            <p><a class="btn btn-default btn-outline disabled" style="color: #005350; font-weight: bold;"><?php echo $usia ?></a></p>
          </div>
          <div class="row" style="max-width: 200px; margin-left:20px;">
          <p><a href="<?php echo site_url('') ?>"><button class="btn icon-btn" style="width: 125%; background-color: #06C6AF; color: white;">PLAYING AT</button></a></p>
          <p><a href=""><button class="btn icon-btn" style="width: 125%; background-color: #06C6AF; color: white;" disabled>BUY TICKET</button></a></p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6">
          <iframe width="560" height="315" src="<?= $trailer; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <?php echo "<p>$sinopsis</p>";?><br>
          <p style="margin-bottom:5px;"><strong>Release Date :</strong></p><p><?php echo date("d M Y", strtotime($release))?></p>
        </div>	
      </div>
    </div>
  </div>
</body>

</html>
