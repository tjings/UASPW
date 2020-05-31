<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/css/table.css" ?>">
</head>
<body>
<div class="container-table">
<table id="tblMovie" class="table table-striped table-bordered" cellspacing="0" width="100%">
	<thead>
		<tr>
        <th style="width: 50px;">No.</th>
        <th>Nama</th>
        <th>Genre</th> 
        <th style="width: 80px;">Minimal Usia</th>
        <th style="width: 100px;">Release Date</th>
        <th style="width: 100px;">Lama Film</th>
		<th style="width: 80px;">Ruangan</th>
		<th style="width: 80px;">Harga</th>
        <th style="width: 170px;">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			foreach($data as $row)
			{
				$base_url = base_url();

				$detail = $base_url."index.php/MoviePage/ShowDetail";
				$id = $row['id_movie'];

				echo "<tr>";
					echo "<td>" .$row['id_movie'] ."</td>";
					echo "<td>" .$row['nama_movie'] ."</td>";
					echo "<td>" .$row['genre_movie'] ."</td>";
                    echo "<td>" .$row['minimal_usia'] ."</td>";
                    echo "<td>" .$row['release_date'] ."</td>";
                    echo "<td>" .$row['waktu_film'] . ' jam'."</td>";
                    echo "<td>" .$row['id_ruangan'] ."</td>";
                    echo "<td>" .$row['harga_movie'] ."</td>";
					echo "<td>";
						echo "<a href='".base_url("index.php/MoviePage/ShowDetail?id=$id")."'
								style='margin-right:10px;color:rgb(0,200,255);'>";
							echo "<button class='btn'>";
								echo "<span class='glyphicon glyphicon-search'></span>";
							echo "</button>";
						echo "</a>";
						echo "<a href='".base_url("index.php/MoviePage/EditMovie/$id")."'
								style='margin-right:10px;color:rgb(255,215,0);'>";
							echo "<button class='btn'>";
								echo "<span class='glyphicon glyphicon-edit'></span>";
							echo "</button>";
						echo "</a>";
						echo "<a href='".base_url("index.php/MoviePage/deleteMovie/$id")."'
								style='margin-right:10px;color:rgb(255,51,0);'>";
							echo "<button class='btn'>";
								echo "<span class='glyphicon glyphicon-remove'></span>";
							echo "</button>";
						echo "</a>";
					echo "</td>";
				echo "</tr>";
			}
		?>
	</tbody>
</table>
</div>
</body>
</html>
