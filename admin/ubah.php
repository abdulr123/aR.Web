<?php

require 'function.php';

// ambil data di URL
$id = $_GET['id'];
// query data mahasiswa berdasarkan id

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST['submit'])) {
    // cek apakah data berhasil di ubah atau tidak
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

<?php include 'template/load1.php'; ?>
<?php include 'template/header.php'; ?>
<?php include 'template/sidebar.php'; ?>
<?php include 'template/topbar.php'; ?>

    <!-- Isi Kontent -->
    <div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Ubah Data Mahasiswa</h1>

    <form class="col-sm-5" action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $mhs['id']; ?>">
        <input type="hidden" name="gambarlama" value="<?php echo $mhs['gambar']; ?>">
    <div class="form-group row">
        <label for="nama" class="col-sm-4 col-form-label">Nama Lengkap</label>
        <div class="col-sm-8">
        <input type="nama" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required value="<?php echo $mhs['nama']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="npm" class="col-sm-4 col-form-label">NPM</label>
        <div class="col-sm-8">
        <input type="npm" class="form-control" id="npm" name="npm" placeholder="Nomor Pokok Mahasiswa" required value="<?php echo $mhs['npm']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="jurusan" class="col-sm-4 col-form-label">Jurusan</label>
        <div class="col-sm-8">
        <input type="jurusan" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan" required value="<?php echo $mhs['jurusan']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-4 col-form-label">Email</label>
        <div class="col-sm-8">
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required value="<?php echo $mhs['email']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="gambar" class="col-sm-4 col-form-label" >Photo</label>
        <div class="col-sm-8">
        <img src="img/<?php echo $mhs['gambar']; ?>" width="40">
                                <input type="file" name="gambar" id="gambar">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-4">
        <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
        </div>
    </div>
    </form>
    
</div>
</div>
<?php include 'template/footer.php'; ?>