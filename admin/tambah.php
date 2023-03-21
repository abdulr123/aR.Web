<?php

require 'function.php';

// cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST['submit'])) {
    // cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'mahasiswa.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan');
                document.location.href = 'tambah.php';
            </script>
        ";
    }
}

?>

<?php include 'template/load1.php'; ?>
<?php include 'template/header.php'; ?>
<?php include 'template/sidebar.php'; ?>
<?php include 'template/topbar.php'; ?>


<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Data Mahasiswa</h1>

    <form class="col-sm-4" action="" method="POST" enctype="multipart/form-data">
    <div class="form-group row">
        <label for="nama" class="col-sm-4 col-form-label">Nama Lengkap</label>
        <div class="col-sm-8">
        <input type="nama" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="npm" class="col-sm-4 col-form-label">NPM</label>
        <div class="col-sm-8">
        <input type="npm" class="form-control" id="npm" name="npm" placeholder="Nomor Pokok Mahasiswa" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="jurusan" class="col-sm-4 col-form-label">Jurusan</label>
        <div class="col-sm-8">
        <input type="jurusan" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-4 col-form-label">Email</label>
        <div class="col-sm-8">
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="gambar" class="col-sm-4 col-form-label" >Photo</label>
        <div class="col-sm-8">
        <input type="file" name="gambar" id="gambar" required>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-4">
        <button type="submit" class="btn btn-primary" name="submit">Tambah</button>
        </div>
    </div>
    </form>
</div>
