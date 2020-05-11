<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.20/r-2.2.3/datatables.min.css"/> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/css/style.css"; ?>">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Dashboard</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="navbar-form navbar-right">
                <a href="<?php echo base_url() ?>index.php/dashboard/logout" type="submit" class="btn btn-success"><i class="fa fa-sign-out"></i> Logout</a>
            </div>
      </div>
    </nav>
<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
              <a href="#" class="list-group-item active" style="text-align: center;background-color: black;border-color: black">
                USER
              </a>
              <a href="<?php echo site_url() . "/dashboard"; ?>" class="list-group-item"><i class="fa fa-dashboard"></i> Dashboard</a>
              <a href="#" class="list-group-item"><i class="fa fa-book"></i> Blog</a>
              <a href="#" class="list-group-item"><i class="fa fa-folder"></i> Kategori</a>
              <a href="#" class="list-group-item"><i class="fa fa-comments-o"></i> Komentar</a>
              <a href="<?php echo site_url() . "/dashboard/logout"?>"  class="list-group-item"><i class="fa fa-sign-out"></i> Logout</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-dashboard"></i> Dashboard</h3>
              </div>
              <div class="panel-body">
                Selamat Datang <b><?php echo $this->session->userdata("user_nama") ?></b> di halaman User System
              </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
  <h3 class='text-center'>Seluruh Film</h3>
  <table id="movie" class="table table-striped table-bordered" style="width:100%;">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Genre</th>
        <th>Minimal Usia</th>
        <th>Release Date</th>
        <th>Lama Film</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $counter = 1;
        foreach($movies as $movie) {
          $id = $movie['id_movie'];
          $name = $movie['nama_movie'];
          $genre = $movie['genre_movie'];
          $usia = $movie['minimal_usia'];
          $release = $movie['release_date'];
          $lama = $movie['waktu_film'];
          $pathToOrder = site_url() . "/booking/showBooking/$id";

          echo "<tr>";
            echo "<td>$counter</td>";
            echo "<td>$name</td>";
            echo "<td>$genre</td>";
            echo "<td>$usia</td>";
            echo "<td>$release</td>";
            echo "<td>$lama jam</td>";
            echo "<td><a href=$pathToOrder>Pesan</a></td>";
          echo "</tr>";

          $counter += 1;
        }
      ?>
    </tbody>
  </table>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.20/r-2.2.3/datatables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() . "assets/js/script.js" ?>"></script>
</body>
</html>