<!DOCTYPE html>
<html>
    <head>
        <title>Now Playing</title>
    </head>
    <body>
        <div class="container">
            <h3 class='text-center'>Seluruh Film</h3>
                <table id="movie" class="table table-striped table-bordered" style="width:100%;">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Genre</th>
                            <th>Minimal Usia</th>
                            <th>Release Date</th>
                            <th>Lama Film</th>
                            <th>Ruangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php
                        $counter = 1;
                        foreach($movies as $movie) {
                            $id = $movie['id_movie'];
                            $name = $movie['nama_movie'];
                            $genre = $movie['genre_movie'];
                            $usia = $movie['minimal_usia'];
                            $release = $movie['release_date'];
                            $lama = $movie['waktu_film'];
                            $ruangan = $movie['id_ruangan'];
                            $pathToOrder = site_url() . "/booking/showBooking?id=$id&ruangan=$ruangan";

                        echo "<tr>";
                        echo "<td>$counter</td>";
                        echo "<td>$name</td>";
                        echo "<td>$genre</td>";
                        echo "<td>$usia</td>";
                        echo "<td>$release</td>";
                        echo "<td>$lama jam</td>";
                        echo "<td>$ruangan</td>";
                        echo "<td><a href=$pathToOrder>Pesan</a></td>";
                        echo "</tr>";

                            $counter += 1;
                        }
                    ?>
                </tbody>
                </table>
        </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.20/r-2.2.3/datatables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() . "assets/js/script.js" ?>"></script>
    </body>
</html>