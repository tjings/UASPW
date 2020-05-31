<!DOCTYPE html>
<html>
<head>
	<title> Tambah Film </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/css/form.css" ?>">
</head>
<body>
	<div class="container-fluid">
    <div class="form-style-8" style="margin-top: 35px; width:45%; margin-left:28%;">
        <?= validation_errors(); ?>
        <?php echo form_open_multipart('MoviePage/movie_add'); ?>
        <h1 style="text-align: center;">Add Movie</h1>
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
            <label>Harga :</label>
            <input type="text" name="harga_movie" id="harga_movie">
        </div>
        <div class="form-group">
            <label for="id_ruangan">Ruangan:</label>

            <select name="id_ruangan" id="id_ruangan">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            </select>
        </div>
        <div class="form-group">
            <label>Poster</label>
            <input type="file" name="poster_movie">
        </div>
        <br><br>

		<input type="submit" name="submit" class="btn btn-primary btn-sm" value="Tambah Film">
        <a class="button" href="index" value="cancel">cancel</button>
		<?php echo form_close(); ?>
	</div>
	</div>
    
</body>
</html>