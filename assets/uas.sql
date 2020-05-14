DROP DATABASE IF EXISTS uas;
CREATE DATABASE IF NOT EXISTS uas;
USE uas;

CREATE TABLE login (
  id_user INT NOT NULL AUTO_INCREMENT,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  nama_user VARCHAR(255) NOT NULL,
  tanggal_lahir DATE NOT NULL,
  role ENUM('admin', 'user') NOT NULL,
  PRIMARY KEY (id_user)
)
ENGINE = InnoDB;

CREATE TABLE ruangan (
  id_ruangan INT NOT NULL AUTO_INCREMENT,
  nama_ruangan VARCHAR(255),
  PRIMARY KEY (id_ruangan)
)
ENGINE = InnoDB;

CREATE TABLE movies (
  id_movie INT NOT NULL AUTO_INCREMENT,
  nama_movie VARCHAR(255) NOT NULL,
  genre_movie VARCHAR(255) NOT NULL,
  sinopsis TEXT NOT NULL,
  minimal_usia INT NOT NULL,
  release_date DATE NOT NULL,
  waktu_film INT NOT NULL,
  poster_movie VARCHAR(255),
  harga_movie INT NOT NULL,
  id_ruangan INT NOT NULL,
  PRIMARY KEY (id_movie),
  FOREIGN KEY (id_ruangan) REFERENCES ruangan(id_ruangan)
)
ENGINE = InnoDB;

CREATE TABLE kursi (
  id_kursi VARCHAR(255) NOT NULL,
  id_ruangan INT NOT NULL,
  is_booked BOOLEAN,
  PRIMARY KEY (id_kursi, id_ruangan),
  FOREIGN KEY (id_ruangan) REFERENCES ruangan(id_ruangan)
)
ENGINE = InnoDB;

CREATE TABLE orders (
  id_order INT NOT NULL AUTO_INCREMENT,
  id_user INT NOT NULL,
  id_movie INT NOT NULL,
  id_ruangan INT NOT NULL,
  id_kursi VARCHAR(255) NOT NULL,
  jumlah_tiket INT NOT NULL,
  total_pembayaran INT NOT NULL,
  PRIMARY KEY (id_order),
  FOREIGN KEY (id_user) REFERENCES login(id_user),
  FOREIGN KEY (id_movie) REFERENCES movies(id_movie),
  FOREIGN KEY (id_ruangan) REFERENCES ruangan(id_ruangan),
  FOREIGN KEY (id_kursi) REFERENCES kursi(id_kursi)
)
ENGINE = InnoDB;

INSERT INTO login VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2020-01-01', 'admin'),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', '2019-01-01', 'user');

INSERT INTO ruangan VALUES
(1, 'Alpha');

INSERT INTO kursi VALUES
('A1', 1, FALSE),
('A2', 1, FALSE),
('A3', 1, FALSE),
('A4', 1, FALSE),
('A5', 1, FALSE);

INSERT INTO movies VALUES
(1, 'Naruto Shippuden: The Last', 'Fantasy', 'Naruto adalah sebuah film.', 10, '2020-01-01', 2, 'assets/posters/naruto.jpg', 75000, 1);
