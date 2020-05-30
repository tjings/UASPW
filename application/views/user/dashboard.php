<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/css/dashboard.css"; ?>">
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
<div class="container">
    <p style="font-size: 90px; text-align:center;">Hello <?php echo $this->session->userdata("user_nama") ?>,</p>
    <p style="font-size: 90px; text-align:center;">we are TICKS.ID</p>
    <hr><br>
    <p class="quotes">Cinema is the ultimate pervert art. It doesn't give you what you desire - it tells you how to desire.</p>

</div>

</body>
</html>