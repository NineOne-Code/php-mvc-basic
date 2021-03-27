<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
            <table border="1" cellspacing="10" cellpadding="0">
                <tr>
                    <th>No. </th>
                    <th>Aksi</th>
                    <th>Gambar</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Prodi</th>
                </tr>

                <?php $i = 1 ?>
                <?php foreach($data["mhs"] as $row): ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row["id"] ?>">ubah</a>
                        <a href="hapus.php?id=<?= $row["id"] ?>" onClick="return confirm('yakin?');">hapus</a>
                    </td>
                    <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
                    <td><?= $row["nim"] ?></td>
                    <td><?= $row["nama"] ?></td>
                    <td><?= $row["email"] ?></td>
                    <td><?= $row["prodi"] ?></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach ?>

            </table>
        </div>
    </div>
</div>