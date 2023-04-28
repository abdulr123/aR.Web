<?php include 'function.php'; ?>
<?php include 'template/load1.php'; ?>
<?php include 'template/header.php'; ?>
<?php include 'template/sidebar.php'; ?>
<?php include 'template/topbar.php'; ?>

    <div class="container-fluid">
        <!-- Isi Kontent -->
        <section class="content">
            <div class="inner">
            <h1 class="h3 mb-0 text-gray-800">Daftar Mahasiswa</h1>

            <div class="button mt-4 mb-4">
                <a href="tambah.php" class="btn btn-primary mr-2"> <i class="fa fa-plus" aria-hidden="true"></i> Data</a> 
                <a href="export.php" class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i> Data</a>
            </div>
            
            <form class="l-0 col-sm-4 " action="" method="POST">
                <div class="input-group mb-3">
                    <input type="text" name="keyword" class="form-control" placeholder="Cari data yang diinginkan.." aria-label="Recipient's username" autocomplete="off" autofocus>
                    <button class="btn btn-primary" type="submit" name="cari">Cari</button>
                </div>                
            </form>
            

            <!-- navigasi -->
            <?php if ($halamanaktif > 1) { ?>
                <a href="?halaman=<?php echo $halamanaktif - 1; ?>">&laquo;</a>
            <?php } ?>

            <?php for ($i = 1; $i <= $jumlahhalaman; ++$i) { ?>
                <?php if ($i == $halamanaktif) { ?>
                    <a href="?halaman=<?php echo $i; ?>" style="font-weight: bold; color:crimson;"> <?php echo $i; ?> </a>
                <?php } else { ?>
                    <a href="?halaman=<?php echo $i; ?>"> <?php echo $i; ?> </a>
                <?php } ?>
            <?php }  ?>

            <?php if ($halamanaktif < $jumlahhalaman) { ?>
                <a href="?halaman=<?php echo $halamanaktif + 1; ?>">&raquo;</a>
            <?php } ?>

            <br>

            <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Photo</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Jurusan</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($mahasiswa as $row) { ?>
                    <tr>

                        <td>
                            <?php echo $i; ?> 
                        </td>

                        <td><img src="img/<?php echo $row['gambar']; ?>" width="50"></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['npm']; ?></td>
                        <td><?php echo $row['jurusan']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td>
                        
                            <a href="ubah.php?id=<?php echo $row['id']; ?>" class="btn btn-info">Ubah</a> 
                            <a href="hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Yakin Ingin Menghapus Data');  " class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php ++$i; ?>
                <?php } ?>
            </tbody>

            </table>
            </div>
        </section>
    </div>
</div>

<?php include 'template/footer.php'; ?>