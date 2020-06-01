<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Edit Profile</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="path/to/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/css/profile.css"; ?>">
	<link rel="stylesheet" href="<?php echo base_url() . "assets/css/style.css" ?>">
    </head>
<body>
<header style="background-color: #114B4C;">
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
<body>
<div class="container" style="margin-top: 35px;">
	<div class="kotak" style="text-align: center; margin:80px;" >
		<h2 class="form-title" style="padding-top: 40px;">Edit Profile</h2>
		<img src="<?php echo base_url() . $param['pict']; ?>" class="img-fluid" width="auto" height="500">
            <form method="POST" action="<?php echo base_url('index.php/Booking/Edit'); ?>" enctype='multipart/form-data' >
				<div class="form-group" hidden>
                    <label for="id_user"><i class="zmdi zmdi-account material-icons-name"></i></label>
                    <input type="text" name="id_user" placeholder="Your Username" value='<?php echo $param["id_user"]; ?>'/>
                </div>
				<div class="form-group">
                    <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                    <input type="text" name="username" id="username" placeholder="Your Username" value='<?php echo $param["username"]; ?>'/>
                </div>
                <div class="form-group">
                    <label for="password"><i class="zmdi zmdi-lock"></i></label>
                    <input type="password" name="password" id="password" required placeholder="Password"/>
				</div>
				<div class="form-group">
                    <label for="nama_user"><i class="zmdi zmdi-account material-icons-name"></i></label>
                    <input type="text" name="nama_user" id="nama_user" placeholder="Name" value='<?php echo $param["nama_user"]; ?>'/>
				</div>
				<div class="form-group">
                    <label for="tanggal_lahir"><i class="zmdi zmdi-calendar"></i></label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="Your Username" value='<?php echo $param["tanggal_lahir"]; ?>'/>
				</div>
				<div class="form-group">
                    <label for="pict"><i class="zmdi zmdi-image"></i></label>
                    <div class="file-field">
						<div class="d-flex justify-content-center">
							<div class="btn btn-mdb-color btn-rounded float-left">
								<span></span>
								<input type="file" name='profpict' class='form-control'>
							</div>
						</div>
					</div>
				</div>
				<div class='form-group'>
					<label for='role'>Role:</label>
					<input type='hidden' name='role' value='<?php echo $param["role"]; ?>'></div>
				</div>
                <div class="form-group form-button" style="text-align: center;">
					<input class='form-control' type='hidden' name='pict' value='<?php echo $param['pict']; ?>'>
					<button type='submit' name='submit'>Update User</button><br>
				</div>
			</form>
    			<div class="form-button" style="text-align: center;">
    			    <form method='POST' action="<?php echo base_url(); ?>"><br>
    						<button type='submit' name='cancel'>Cancel</button><br><br><br>
    				</form>
    			</div>
		</div>
	</div>
</body>

</html>
