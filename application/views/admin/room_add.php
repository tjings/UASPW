<!DOCTYPE html>
<html>
<head>
	<title> Tambah Ruangan </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/css/form.css" ?>">
</head>
<body>
	<div class="container-fluid">
    <div class="form-style-8" style="margin-top: 35px; width:45%; margin-left:28%;">
        <?= validation_errors(); ?>
        <?php echo form_open_multipart('MoviePage/room_add'); ?>
        <h1 style="text-align: center;">Add Room</h1>
		<div class="form-group">
            <label>Nama Ruangan :</label>
            <input type="text" name="nama_ruangan" id="nama_ruangan">
        </div>
		<div class="form-group">
            <label>Panjang Ruangan :</label>
            <input type="number" name="panjang_ruangan" id="panjang_ruangan">
        </div>
		<div class="form-group">
            <label>Lebar Ruangan :</label>
            <input type="number" name="lebar_ruangan" id="lebar_ruangan">
        </div>
		<div class="form-group">
            <label>Poster</label>
            <input type="file" name="logo">
        </div> 
        <br><br>
            <button type='submit' name='submit' class='btn btn-primary'>Tambah Ruangan</button>
        <form method='POST' action="<?php echo base_url(); ?>">
                <button type='submit' name='cancel' class='btn btn-default'>Cancel</button>
        </form>
		<?php echo form_close(); ?>
	</div>
	</div>
    
</body>
</html>
