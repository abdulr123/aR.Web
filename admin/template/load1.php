<?php

session_start();

if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit;
}

// menambahkan pagination
// konfigurasi pagination

$jumlahdataperhalaman = 10;
$jumlahdata = count(query('SELECT * FROM mahasiswa'));
$jumlahhalaman = ceil($jumlahdata / $jumlahdataperhalaman);
if (isset($_GET['halaman'])) {
    $halamanaktif = $_GET['halaman'];
} else {
    $halamanaktif = 1;
}

$awaldata = ($jumlahdataperhalaman * $halamanaktif) - $jumlahdataperhalaman;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awaldata, $jumlahdataperhalaman");

// ketika tombol cari di klik maka akan menampilkan hasil data yang dicari
if (isset($_POST['cari'])) {
    $mahasiswa = cari($_POST['keyword']);
}

// menampilkan nama di top bar
$user = query('SELECT * FROM user');

// membuat title
$title = 'aRp.';
$tahunSekarang = date('Y');
