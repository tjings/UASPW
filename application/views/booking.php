<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Book</title>
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
        <a style="color: #FFFFFF" class="navbar-brand" href="<?php echo site_url('dashboard')?>">
          <img src="<?= base_url() . "/assets/images/logo.jpg"; ?>" width="40" height="35" class="d-inline-block-align-top" alt="Image Logo"/>
        </a>
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
<div class="container" style="padding-top: 50px;">
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
            <p><span class="glyphicon glyphicon-time"></span><?php echo " $lama - Minutes" ?></p>
          </div>
          <div class="row" style="max-width: 200px; margin-left:20px;">
            <p><?php echo "Rp $harga"?></p>
          </div>
          <div class="row" style="max-width: 200px; margin-left:20px;">
            <p><a class="btn btn-default btn-outline disabled" style="color: #005350; font-weight: bold;"><?php echo $usia ?></a></p>
          </div>
          <div class="row" style="max-width: 200px; margin-left:20px;">
          <p><button class="btn icon-btn" style="width: 125%; background-color: #00807b; color: white;">PLAYING AT</button></p>
          <p><button class="btn icon-btn" style="width: 125%; background-color: #00807b; color: white;">BUY TICKET</button></p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6">
        <iframe width="560" height="315" src="<?= $trailer; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>	
      </div>
      <div>
        <?php echo "<p>$sinopsis</p>";?>
      </div><br>
      <p style="margin-bottom:5px;"><strong>Release Date :</strong></p><p><?php echo date("d M Y", strtotime($release))?></p>

    </div>
    

    <br><br>
    <a href="<?php echo site_url('booking/now'); ?>">Kembali</a><br>

    <?php
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

      <form action="<?= site_url() . "/booking/orderMovie"; ?>" method="POST">
        <input type="hidden" name="id_ruangan" value="<?php echo $this->input->get('ruangan'); ?>">
        <input type="hidden" name="id_movie" value="<?php echo $this->input->get('id'); ?>">
        <input type="hidden" name="harga" value="<?= $harga; ?>">
        <input type="text" id="tempatKursi" placeholder="Kursi" name="kursi" readonly required autocomplete="off" />
        <input type="submit" value="Submit">
      </form>

    <?php
    }
    ?>

    <!-- nanti hapus -->
    <div class="spacer" style="padding-bottom:100px;"></div>

  </div>
</body>

</html>
