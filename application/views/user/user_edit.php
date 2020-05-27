<!DOCTYPE html>
<html>
<head>
	<title> Update Profile </title>
</head>
<body>
	<br/>
	<br/>
	<br/>
	<div class="container-fluid">
			<div style="border-bottom: 1px solid black;">
				<p style="text-align: center;"> 
					<font size="7" color="black"> Update Profile </font>
					<font size="5" color="rgb(127,127,127)"> Bioskop </font> 
				</p>
			</div>
	</div>
	<div class="container" style="margin-top: 35px;">
	
		<form method='POST' action='<?php echo base_url('index.php/Booking/Edit'); ?>' enctype='multipart/form-data'>
			<div class='form-group row'>
                <label class='col-sm-3' for='id_movie'>ID User:</label>
				<input class='form-control' type='hidden' name='movieid' value='<?php echo $param['id_user']; ?>'>
                <div class='col-sm-6'><input class='form-control' type='text' name='title' value='<?php echo $param["id_user"]; ?>' disabled></div>
            </div>
            <div class='form-group row'>
                <label class='col-sm-3' for='username'>Username : </label>
                <div class='col-sm-6'><input class='form-control' type='text' name='username' value='<?php echo $param["username"]; ?>'></div>
            </div>
            <div class='form-group row'>
                <label class='col-sm-3' for='password'>Password:</label>
                <div class='col-sm-6'><input class='form-control' type='text' name='password'> </div>
            </div>
            <div class='form-group row'>
                <label class='col-sm-3' for='nama_user'>Nama User :</label>
                <div class='col-sm-6'><input class='form-control' type='text' name='nama_user' value='<?php echo $param["nama_user"]; ?>'></div>
            </div>
            <div class='form-group row'>
                <label class='col-sm-3' for='tanggal_lahir'>Tanggal lahir:</label>
                <div class='col-sm-6'><input class='form-control' type='date' name='tanggal_lahir' value='<?php echo $param["tanggal_lahir"]; ?>'></div>
            </div>
            <div class='form-group row'>
                <label class='col-sm-3' for='role'>Role:</label>
                <div class='col-sm-6'><input class='form-control' type='text' name='role' value='<?php echo $param["role"]; ?>'></div>
            </div>
           
			<div class='form-group row'>
                <label class='col-sm-3' for='poster_movie'>Picture Profile:</label>
				<div class='col-sm-6'>
					<div class="file-field">
						<img src="<?php echo base_url($param['pict']);?>" class="img-fluid" width="auto" height="500">
						<div class="d-flex justify-content-center">
							<div class="btn btn-mdb-color btn-rounded float-left">
								<span></span>
								<input type="file" name='pict' class='form-control'>
							</div>
						</div>
					</div> 
            	</div>
			</div>
            
			<input class='form-control' type='hidden' name='pict' value='<?php echo $param['pict']; ?>'>
            <button type='submit' name='submit' class='btn btn-primary'>Update User</button>
			
        </form>
        <form method='POST' action="<?php echo base_url(); ?>">
                <button type='submit' name='cancel' class='btn btn-primary'>Cancel</button>
        </form>
	</div>
	<br/>
	<br/>
</body>
</html>