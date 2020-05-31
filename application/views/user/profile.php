<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profile</title>
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
            <li><a href="<?php echo site_url('booking/showHistory') ?>">History</a></li>
        </ul>
    </nav>
    <li class="dropdown"><a href="<?php echo site_url('booking/ShowProfile') ?>"><button>Profile</button></a>
        <ul class="dropdown-content">
            <li><a href="<?php echo site_url('booking/EditUser') ?>">Edit Profile</a></li>
            <li><a href="<?php echo base_url() ?>index.php/dashboard/logout">Log Out</a></li>
        </ul>
    </li>
</header>
<div class="container-booking" style="text-align: center; width: 100%;">
		<h2 class="form-title" style="text-align: center;">Profile</h2>
		<img src="<?php echo base_url() . $param['pict']; ?>" class="img-fluid" width="auto" height="500"> 
            <form method="POST" action="<?php echo base_url('index.php/Booking/Edit'); ?>" enctype='multipart/form-data'  style="margin-left: 35%;">
            <table id="example" style="width:50%; border-collapse: collapse;">
            <tr>
                <td style="padding: 20px; text-align: right; border-bottom: 1px solid #ddd;">Name</td>
                <td style="padding: 20px; text-align: left; border-bottom: 1px solid #ddd;">
                <?php echo $param["nama_user"]; ?>
                </td>
            </tr>
            <tr>
                <td style="padding: 20px; text-align: right; border-bottom: 1px solid #ddd;">Username</td>
                <td style="padding: 20px; text-align: left; border-bottom: 1px solid #ddd;">
                <?php echo $param["username"]; ?>
                </td>
            </tr>
            <tr>
                <td style="padding: 20px; text-align: right; border-bottom: 1px solid #ddd;">Tanggal Lahir</td>
                <td style="padding: 20px; text-align: left; border-bottom: 1px solid #ddd;">
                <?php echo $param["tanggal_lahir"]; ?>
                </td>
            </tr>
            </table>
            </form>
</div>
</body>
</html>
