DROP DATABASE IF EXISTS uas;
CREATE DATABASE IF NOT EXISTS uas;
USE uas;

CREATE TABLE login (
  id_user INT NOT NULL AUTO_INCREMENT,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  nama_user VARCHAR(255) NOT NULL,
  role ENUM('admin', 'user') NOT NULL,
  PRIMARY KEY (id_user)
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
  PRIMARY KEY (id_movie)
)
ENGINE = InnoDB;

CREATE TABLE ruangan (
  id_ruangan INT NOT NULL AUTO_INCREMENT,
  nama_ruangan VARCHAR(255),
  PRIMARY KEY (id_ruangan)
)
ENGINE = InnoDB;

CREATE TABLE kursi (
  id_kursi VARCHAR(255) NOT NULL,
  id_ruangan INT NOT NULL,
  PRIMARY KEY (id_kursi)
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
  no_kursi INT NOT NULL,
  total_pembayaran INT NOT NULL,
  PRIMARY KEY (id_order),
  FOREIGN KEY (id_user) REFERENCES login(user_id),
  FOREIGN KEY (id_movie) REFERENCES movies(id_movie),
  FOREIGN KEY (id_ruangan) REFERENCES ruangan(id_ruangan),
  FOREIGN KEY (id_kursi) REFERENCES kursi(id_kursi)
)
ENGINE = InnoDB;

INSERT INTO login VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin'),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'user');
