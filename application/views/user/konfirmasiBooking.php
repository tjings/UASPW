<!DOCTYPE html>
<html>
<head>
  <title>Konfirmasi Book</title>
</head>
<body>
  <p>Konfirmasi Booking</p>

  <form action="<?= site_url() . "/booking/orderMovie"; ?>" method="POST">
    <p><?= $this->session->userdata('user_name'); ?></p>
    <p><?= $this->session->userdata('user_pass'); ?></p>
    <p><?= $this->session->userdata('role'); ?></p>
    <p>Movie yang dibeli: <?= $movie['nama_movie']; ?></p>
    <p>Kursi yang dipesan: <?= $id_kursi; ?></p>
    <p>ID Ruangan: <?= $id_ruangan; ?></p>
    <p>Harga: <?= $movie['harga_movie']; ?></p>

    <input type="hidden" name="id_ruangan" value="<?= $id_ruangan; ?>">
    <input type="hidden" name="id_movie" value="<?= $movie['id_movie']; ?>">
    <input type="hidden" name="harga" value="<?= $movie['harga_movie']; ?>">
    <input type="text" id="tempatKursi" value="<?= $id_kursi; ?>" name="kursi" readonly required autocomplete="off" />
    <input type="submit" value="PESAN FILMKU">
  </form>

</body>
</html>
