<?php

session_start();

if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit;
}

require 'function.php';
// menampilkan nama di top bar
$user = query('SELECT * FROM user');

// menampilkan semua data mahasiswa
$mahasiswa = query('SELECT * FROM mahasiswa');

// membuat title
$title = 'aRp.';
$tahunSekarang = date('Y');
