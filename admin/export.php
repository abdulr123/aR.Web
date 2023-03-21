<?php include 'template/load2.php'; ?>
<?php include 'template/header.php'; ?>
<?php include 'template/sidebar.php'; ?>
<?php include 'template/topbar_export.php'; ?>

<?php include 'template/header_export.php'; ?>

    <div class="container">
        <h2>Cetak Data Mahasiswa</h2>

        <div class="data-tables datatable-dark">

            <!-- Masukkan table nya disini, dimulai dari tag TABLE -->
            <table class="table" cellspacing="0" width="100%" id="mauexport">

                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Jurusan</th>
                        <th>Email</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($mahasiswa as $row) { ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['npm']; ?></td>
                            <td><?php echo $row['jurusan']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                        </tr>
                        <?php ++$i; ?>
                    <?php } ?>
                </tbody>

            </table>

        </div>
    </div>
    </div>

    <?php include 'template/footer_export.php'; ?>