<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Theaters</title>
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

<div class="container" style="padding-top: 200px;">
	<div class="row">
        <?php foreach ((array) $data as $i) : 
            $room = $i['nama_ruangan'];
			$ruangan = $i['id_ruangan'];
			$logo = base_url() . $i['logo'];
			$pathToShowRoom = site_url() . "/booking/showTheaterPlaying?ruangan=$ruangan";
			?>
		<div class="col-md-4">
			<div class="card mb-3" style="border: none; background-color: #e6fefb">
				<a href="<?=$pathToShowRoom?>">
                    <img style="height: 370px; width: 370px;"src="<?=$logo ?>" class="card-img-top">
                </a>
				<div class="card-body">
					<h5 class="card-title" style="text-align: center"><?=$room?></h5>
					
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.20/r-2.2.3/datatables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() . "assets/js/script.js" ?>"></script>
    </body>
</html>
