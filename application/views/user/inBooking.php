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
    <?php
		$id = $movie['id_movie'];
    $ruangan = $movie['id_ruangan'];
		$harga = $movie['harga_movie'];
    if ($umur < $movie['minimal_usia']) {
      $min = $movie['minimal_usia'];
      echo "Maaf anda terlalu muda! Minimal usia untuk menonton adalah $min. Usia Anda: $umur tahun!";
    } else {
    ?>

      <div class="kotak" style="text-align: center; width: 100%">
        <h3>Kursi</h3>
        <div class="satu-renteng">
          <?php
          $counter = 0;
          foreach ($kursi as $i) {
            $id_kursi = $i['id_kursi'];

            if ($counter == $ruang['panjang_ruangan']) {
              $counter = 0;
              echo "<br>";
            }

            if ($i['is_booked'] == 1) {
              echo
                "<div class='box box-sudah-dipesan' onClick='errorMessage()'>
                    <p>$id_kursi</p>
                  </div>";
            } else {
              echo
                "<div class='box' onClick='ubahWarna(this)' data-value=$id_kursi>
                    <p>$id_kursi</p>
                  </div>";
            }
            $counter++;
          }
          ?>
        </div>
      </div>

			<form action="<?= site_url() . "/booking/showOrderMovie"; ?>" method="POST">
        <input type="hidden" name="id_ruangan" value="<?php echo $this->input->get('ruangan'); ?>">
        <input type="hidden" name="id_movie" value="<?php echo $this->input->get('id'); ?>">
        <input type="hidden" name="harga" value="<?= $harga; ?>">
        <input type="text" id="tempatKursi" placeholder="Kursi" name="kursi" readonly required autocomplete="off" />
        <input type="submit" value="Submit">
      </form>

    <?php
    }
    ?>

