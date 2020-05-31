<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>History</title>
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
    <li class="dropdown"><a href="<?php echo site_url('booking/ShowProfile') ?>"><button>Profile</button></a>
        <ul class="dropdown-content">
            <li><a href="<?php echo site_url('booking/EditUser') ?>">Edit Profile</a></li>
            <li><a href="<?php echo base_url() ?>index.php/dashboard/logout">Log Out</a></li>
        </ul>
    </li>
</header>
<div class="container-booking" style="width: 100%;">
<h2 class="form-title" style="text-align: center;">History</h2>
        <?php foreach($history as $i) {
			$id_mov = $i['id_movie'];
			$nama_mv = $i['nama_movie'];
			$genre = $i['genre_movie'];
            $waktu = $i['waktu_film'];
		}
        ?>
        <form style="margin-left: 35%;">
            <table id="example" style="width:50%; border-collapse: collapse;">
            <tr>
                <td style="padding: 20px; text-align: right; border-bottom: 1px solid #ddd;">Movie</td>
                <td style="padding: 20px; text-align: left; border-bottom: 1px solid #ddd;">
                <?php echo $nama_mv ?>
                </td>
            </tr>
            <tr>
                <td style="padding: 20px; text-align: right; border-bottom: 1px solid #ddd;">Genre</td>
                <td style="padding: 20px; text-align: left; border-bottom: 1px solid #ddd;">
                <?php echo $genre ?>
                </td>
            </tr>
            <tr>
                <td style="padding: 20px; text-align: right; border-bottom: 1px solid #ddd;">Waktu</td>
                <td style="padding: 20px; text-align: left; border-bottom: 1px solid #ddd;">
                <?php echo $waktu ?>
                </td>
            </tr>
            </table>
            </form>
</div>
</body>
</html>
