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
      <h1>Movie Poster</h1>
      <img src="<?php echo base_url() . $movie['poster_movie']; ?>">

      <h2>Data Movie</h2>
      <?php
        $id = $movie['id_movie'];
        $nama = $movie['nama_movie'];
        $genre = $movie['genre_movie'];
        $sinopsis = $movie['sinopsis'];
        $usia = $movie['minimal_usia'];
        $release = $movie['release_date'];
        $lama = $movie['waktu_film'];
        $harga = $movie['harga_movie'];
        $ruangan = $movie['id_ruangan'];

        echo "<p>ID: $id</p>";
        echo "<p>Nama: $nama</p>";
        echo "<p>Genre: $genre</p>";
        echo "<p>Sinopsis: $sinopsis</p>";
        echo "<p>Usia: $usia</p>";
        echo "<p>Release Date: $release</p>";
        echo "<p>Lama Movie: $lama</p>";
        echo "<p>Harga: $harga</p>";
        echo "<p>Ruangan: $ruangan</p>";
      ?>

      <h2>Pesan</h2>
      <a href="<?php echo site_url(); ?>">Kembali</a>

      <div class="kotak" style="text-align: center; width: 100%">
        <h3>Kursi</h3>
        <div class="satu-renteng">
          <?php
            $counter = 0;
            foreach($kursi as $i) {              
              $id_kursi = $i['id_kursi'];
              echo "<div class='box box-bg'>$id_kursi</div>";
              $counter++;
            }
            ?>
        </div>
      </div>

      <form action="#" method="POST">
        <input type="hidden" name="id_ruangan" value="<?php echo $this->input->get('ruangan'); ?>">
        <input type="hidden" name="id_movie" value="<?php echo $this->input->get('id'); ?>">
        <input type="text" placeholder="Kursi" name="kursi" />
        <input type="number" placeholder="Jumlah Tiket" name="jmlTiket">
        <input type="submit" value="Submit">
      </form>

      <!-- nanti hapus -->
      <div class="spacer" style="padding-bottom:100px;"></div>

    </div>
  

  </body>
</html>