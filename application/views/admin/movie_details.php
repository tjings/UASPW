<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> Detail Film </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . "assets/css/details.css"; ?>">
</head>
<body>
	<br/>
	<br/>
	<br/>
	<?php
		foreach($detail as $row){
			$nama_movie = $row['nama_movie'];
			$genre_movie = $row['genre_movie'];
			$sinopsis = $row['sinopsis'];
            $minimal_usia = $row['minimal_usia'];
            $release_date = $row['release_date'];
            $waktu_film = $row['waktu_film'];
            $poster_movie = $row['poster_movie'];
            $harga_movie = $row['harga_movie'];
	?>	
	<div class="container-fluid">
			<div style="border-bottom: 1px solid black;">
				<p style="text-align: center;"> 
					<font size="7" color="black"> <?php echo $nama_movie ?> </font>
					<font size="5" color="rgb(127,127,127)"> Detail Film </font> 
					<a href="<?php echo base_url('index.php/MoviePage'); ?>" style="float:right;margin-right: 15px;margin-top: 35px;">
						<button class="btn btn-primary"> 
							<span class="glyphicon glyphicon-menu-left"></span>
							Back
						</button>
					</a>
				</p>
			</div>
	</div>
	<br/>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p style="font-size: 25px;color: rgb(127,127,127);"> Genre Movie : <?php  echo $genre_movie  ?> </p>
				<p style="font-size: 25px;color: rgb(127,127,127);"> Sinopsis : <?php  echo $sinopsis  ?> </p>
				<p style="font-size: 25px;color: rgb(127,127,127);"> Minimal Usia : <?php  echo $minimal_usia  ?> </p>
				<p style="font-size: 25px;color: rgb(127,127,127);"> Released : <?php  echo $release_date  ?> </p>
				<p style="font-size: 25px;color: rgb(127,127,127);"> Durasi Film : <?php  echo $waktu_film ?> </p>
				<p style="font-size: 25px;color: rgb(127,127,127);"> Harga : <?php  echo $harga_movie  ?> </p>
			</div>
			<div class="col-md-6" id="img">
				<img src="<?php echo base_url($poster_movie) ?>" alt="Link Poster not found !" width="auto" height="500">
			</div>
		</div>
	</div>
	<?php } ?>
</body>
</html>