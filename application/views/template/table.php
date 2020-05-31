<table id="tblMovie" class="table table-striped table-bordered" cellspacing="0" width="100%">
	<thead>
		<tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Genre</th> 
        <th>Minimal Usia</th>
        <th>Release Date</th>
        <th>Lama Film</th>
		<th>Ruangan</th>
		<th>Harga</th>
        <th>Aksi</th>
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
	<tfoot>
    <td>No.</td>
    <td>Nama</td>
    <td>Genre</td>
    <td>Minimal Usia</td>
    <td>Release Date</td>
    <td>Lama Film</td>
    <td>Ruangan</td>
	<td>Harga</td>
    <td>Aksi</td>
	</tfoot>
</table>
