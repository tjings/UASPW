<!DOCTYPE html>
<html>

<head>
  <title>Book</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url() . "assets/css/booking.css" ?>">

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() . "assets/js/booking.js"; ?>"></script>
</head>
<body>
  <div class="container">
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
        <div class="col-md-9 col-sm-6 col-xs-6">
          <div class="row" style="max-width: 200px; margin-left:20px;">
          <p><span class="glyphicon glyphicon-time"></span><?php echo " $lama - Minutes" ?></p>
          <p><i class="fa fa-coins"></i><?php echo "Rp $harga"?></p>
          <p><a class="btn btn-default btn-outline disabled" style="color: #005350; font-weight: bold;"><?php echo $usia ?></a></p>
          <p><button class="btn icon-btn" style="width: 90%; background-color: #00807b; color: white;">PLAYING AT</button></p>
          <p><button class="btn icon-btn" style="width: 90%; background-color: #00807b; color: white;">BUY TICKET</button></p>
          <p><button class="btn icon-btn" style="width: 90%; background-color: #00807b; color: white;">TRAILER</button></p>
          </div>
        </div>	
      </div>
      <div>
        <?php echo "<p>$sinopsis</p>";?>
      </div><br>
      <p style="margin-bottom:5px;"><strong>Release Date :</strong></p><p><?php echo date("d M Y", strtotime($release))?></p>

    </div>
    <iframe width="560" height="315" src="<?= $trailer; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

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
