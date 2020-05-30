<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Confirmation Booking</title>
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
        </ul>
    </nav>
    <li class="dropdown"><a href="#"><button>Profile</button></a>
        <ul class="dropdown-content">
            <li><a href="<?php echo site_url('booking/EditUser') ?>">Edit Profile</a></li>
            <li><a href="<?php echo base_url() ?>index.php/dashboard/logout">Log Out</a></li>
        </ul>
    </li>
</header>
<div class="container-booking" style="text-align: center; width: 100%;">
  <form action="<?= site_url() . "/booking/orderMovie"; ?>" method="POST" style="margin-left: 35%;">

  <table id="example" style="width:50%; border-collapse: collapse;">
            <tr>
                <td style="padding: 20px; text-align: right; border-bottom: 1px solid #ddd;">Name</td>
                <td style="padding: 20px; text-align: left; border-bottom: 1px solid #ddd;">
                <?= $this->session->userdata('user_name'); ?>
                </td>
            </tr>
            <tr>
                <td style="padding: 20px; text-align: right; border-bottom: 1px solid #ddd;">Movie</td>
                <td style="padding: 20px; text-align: left; border-bottom: 1px solid #ddd;">
                <?= $movie['nama_movie']; ?>
                </td>
            </tr>
            <tr>
                <td style="padding: 20px; text-align: right; border-bottom: 1px solid #ddd;">Seat</td>
                <td style="padding: 20px; text-align: left; border-bottom: 1px solid #ddd;">
                <?= $id_kursi; ?>
                </td>
            </tr>
            <tr>
                <td style="padding: 20px; text-align: right; border-bottom: 1px solid #ddd;">Theater</td>
                <td style="padding: 20px; text-align: left; border-bottom: 1px solid #ddd;">
                
                </td>
            </tr>
            <tr>
                <td style="padding: 20px; text-align: right; border-bottom: 1px solid #ddd;">Price</td>
                <td style="padding: 20px; text-align: left; border-bottom: 1px solid #ddd;">
                <?= $movie['harga_movie']; ?>
                </td>
            </tr>
        </table>

    <input type="hidden" name="id_ruangan" value="<?= $id_ruangan; ?>">
    <input type="hidden" name="id_movie" value="<?= $movie['id_movie']; ?>">
    <input type="hidden" name="harga" value="<?= $movie['harga_movie']; ?>">
    <input type="hidden" id="tempatKursi" value="<?= $id_kursi; ?>" name="kursi" readonly required autocomplete="off" />
    
  </form><br><br>
  <button type="submit" style="background-color: #06C6AF;">Submit</button><br><br><br><br>
  <a href="previous_url"><button style="background-color: #06C6AF;">Back</button></a>
  </div>
</body>
</html>
