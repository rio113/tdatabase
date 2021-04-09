DROP DATABASE IF EXISTS tdatabase;
CREATE DATABASE tdatabase;

USE tdatabase;

CREATE TABLE form_entry(
    nama            VARCHAR(20) NOT NULL,
    alamat          VARCHAR(50),
    nomor_telepon    VARCHAR(13)
)