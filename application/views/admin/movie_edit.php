<!DOCTYPE html>
<html>
<head>
    <title> Update Film </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/css/form.css" ?>">
</head>
<body>
    <div class="container-fluid">
    <div class="form-style-8" style="margin-top: 35px; width:45%; margin-left:28%;">
		<?php 
			if(isset($param)){ 
				foreach($param as $row){
		?>
		<form method='POST' action='<?php echo base_url('index.php/MoviePage/Edit'); ?>' enctype='multipart/form-data'>
			<div class='form-group row'>
                <label class='col-sm-3' for='id_movie'>ID Film:</label>
				<input class='form-control' type='hidden' name='id_movie' value='<?php echo $row['id_movie']; ?>'>
                <div class='col-sm-6'><input class='form-control' type='text' name='title' value='<?php echo $row["id_movie"]; ?>' disabled></div>
            </div>
            <div class='form-group row'>
                <label class='col-sm-3' for='nama_movie'>Nama Film:</label>
                <div class='col-sm-6'><input class='form-control' type='text' name='nama_movie' value='<?php echo $row["nama_movie"]; ?>'></div>
            </div>
            <div class='form-group row'>
                <label class='col-sm-3' for='genre_movie'>Genre:</label>
                <div class='col-sm-6'><input class='form-control' type='text' name='genre_movie' value='<?php echo $row["genre_movie"]; ?>'></div>
            </div>
            <div class='form-group row'>
                <label class='col-sm-3' for='sinopsis'>Sinopsis:</label>
                <div class='col-sm-6'><input class='form-control' type='text' name='sinopsis' value='<?php echo $row["sinopsis"]; ?>'></div>
            </div>
            <div class='form-group row'>
                <label class='col-sm-3' for='minimal_usia'>Minimal Usia:</label>
                <div class='col-sm-6'><input class='form-control' type='number' name='minimal_usia' value='<?php echo $row["minimal_usia"]; ?>'></div>
            </div>
            <div class='form-group row'>
                <label class='col-sm-3' for='release date'>Tanggal rilis:</label>
                <div class='col-sm-6'><input class='form-control' type='date' name='release_date' value='<?php echo $row["release_date"]; ?>'></div>
            </div>
            <div class='form-group row'>
                <label class='col-sm-3' for='waktu_film'>Durasi Film:</label>
                <div class='col-sm-6'><input class='form-control' type='number' name='waktu_film' value='<?php echo $row["waktu_film"]; ?>'></div>
            </div>
			<div class='form-group row'>
                <label class='col-sm-3' for='poster_movie'>Poster:</label>
				<div class='col-sm-6'>
					<div class="file-field">
						<img src="<?php echo base_url($row['poster_movie']);?>" class="img-fluid" width="auto" height="500">
						<div class="d-flex justify-content-center">
							<div class="btn btn-mdb-color btn-rounded float-left">
								<span></span>
								<input type="file" name='posternew' class='form-control'>
							</div>
						</div>
					</div> 
            	</div>
			</div>
            <div class="form-group">
                <label>Harga :</label>
                <input type="text" name="harga_movie" id="harga_movie">
            </div>
			<input class='form-control' type='hidden' name='poster' value='<?php echo $row['poster_movie']; ?>'>
            <button type='submit' name='submit' class='btn btn-primary'>Update Film</button>
        </form>
        <form method='POST' action="<?php echo base_url(); ?>">
                <button type='submit' name='cancel' class='btn btn-default'>Cancel</button>
        </form>
	</div>
</div>
	<br/>
	<br/>
    <?php }}?>
</body>
</html>