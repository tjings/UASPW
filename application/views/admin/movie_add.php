<!DOCTYPE html>
<html>
<head>
	<title> Tambah Film </title>
</head>
<body>
	<br/>
	<br/>
	<br/>
	<div class="container-fluid">
			<div style="border-bottom: 1px solid black;">
				<p style="text-align: center;"> 
					<font size="7" color="black"> Tambah Film </font>
					<font size="5" color="rgb(127,127,127)"> Bioskop </font> 
				</p>
			</div>
	</div>
	<div class="container" style="margin-top: 35px;">
		<?php echo form_open_multipart('MoviePage/movie_add'); ?>
		<div class="form-group">
            <label>Nama Film :</label>
            <input type="text" name="nama_movie" id="nama_movie">
        </div>

        <div class="form-group">
            <label>Genre :</label>
            <input type="text" name="genre_movie" id="genre_movie">
        </div>

        <div class="form-group">
            <label>Sinopsis :</label><br>
			<input type="text" name="sinopsis" id="sinopsis">
        </div>
        <div class="form-group">
            <label>Minimal Usia :</label>
            <input type="number" name="minimal_usia" id="minimal_usia">
        </div>
        <div class="form-group">
            <label>Tanggal rilis :</label>
            <input type="date" name="release_date" id="release_date">
        </div>
        <div class="form-group">
            <label>Durasi rilis :</label>
            <input type="number" name="waktu_film" id="waktu_film">
        </div>
        <div class="form-group">
            <label>Poster :</label>
            <input type="_FILES_" name="poster_movie" id="poster_movie">
        </div>
        <div class="form-group">
            <label>Harga :</label>
            <input type="text" name="harga_movie" id="harga_movie">
        </div>

		<button type="submit" name="submit" class="btn btn-primary btn-sm">Tambah Film</button>
        <a class="button" href="dashboard.php">cancel</button>
		<?php echo form_close(); ?>
	</div>
</body>
</html>