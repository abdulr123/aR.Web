<?php

session_start();

if (!$_SESSION["login"]) {
    header("Location: login.php");
    exit;
}

require 'function.php';

//ambil data di URL
$id = $_GET["id"];
// query data mahasiswa berdasarkan id

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

//cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"])) {
    //cek apakah data berhasil di ubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah');
                document.location.href = 'ubah.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
    <link rel="stylesheet" href="./css-admin/style.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Optional theme -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet"> 
</head>

<body>

    <div class="wrapper">
            <nav class="navbar border-bottom">
                <div class="navbar-header">  
                    <a class="navbar-brand" href="index.php">aR.Web</a>
                </div>
            </nav> 
            <!-- Menu -->
            <div class="sidebar">
                <menu>
                <ul class="menu-content">
                    <li><a href="index.php"> Home</a></li>
                    <li><a href="mahasiswa.php"> <span>Data Mahasiswa</span></a>
                    </li>
                    <li><a href="logout.php"> <span>Logout</span></a></li>
                </ul>
                </menu>
            </div>

            <!-- Isi Kontent -->
            <section class="content">
                <div class="inner">
                    <h1>Ubah Data Mahasiswa</h1>

                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $mhs["id"] ?>">
                        <input type="hidden" name="gambarlama" value="<?= $mhs["gambar"] ?>">
                        <ul>
                            <li>
                                <label for="nama"> NAMA : </label>
                                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"] ?>">
                            </li>
                            <li>
                                <label for="npm"> NPM : </label>
                                <input type="text" name="npm" id="npm" required value="<?= $mhs["npm"] ?>">
                            </li>
                            <li>
                                <label for="jurusan"> JURUSAN : </label>
                                <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"] ?>">
                            </li>
                            <li>
                                <label for="email"> EMAIL : </label>
                                <input type="text" name="email" id="email" required value="<?= $mhs["email"] ?>">
                            </li>
                            <li>
                                <label for="gambar"> PHOTO : </label>
                                <img src="img/<?= $mhs["gambar"] ?>" width="40">
                                <input type="file" name="gambar" id="gambar">
                            </li>
                            <li>
                                <button type="submit" name="submit">Ubah Data</button>
                            </li>
                        </ul>
                    </form>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>
            </section>
    </div>


</body>

</html>