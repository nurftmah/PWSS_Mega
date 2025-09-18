<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
</head>
<body>
    <form action="" method="get">
        <input type="search" name="Cari" id="">
        <input type="submit" value="Cari">
    </form>
    <br>
    <a href="create-siswa.php"><button>Tambah Siswa</button></a>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>NISN</th>
            <th>NAMA</th>
            <th>JENIS KELAMIN</th>
            <th>ALAMAT</th>
            <th>NO HP</th>
            <th>AKSI</th>
        </tr>
        <?php
        include "koneksi.php";

        if(isset($_GET['Cari'])){
            $cari = mysqli_real_escape_string($koneksi, $_GET['Cari']);
            $sql = "SELECT * FROM siswa WHERE nisn='$cari' OR nama='$cari'";
        } else {
            $sql = "SELECT * FROM siswa";
        }

        $query = mysqli_query($koneksi,$sql);
        $no = 1;
        while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['nisn']; ?></td>
            <td><?= $data['nama']; ?></td>
            <td><?= $data['jk'] == 'l' ? 'Laki-Laki' : 'Perempuan' ?></td>
            <td><?= $data['alamat']; ?></td>
            <td><?= $data['nohp']; ?></td>
            <td>
                <a href="delete-siswa.php?nisn=<?= $data['nisn']; ?>">
                    <button>Hapus</button>
                </a>
                <a href="edit-siswa.php?nisn=<?= $data['nisn']; ?>">
                    <button>Edit</button>
                </a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>