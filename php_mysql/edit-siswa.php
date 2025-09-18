<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
</head>
<body>
    <?php 
    if(!isset($_GET['nisn'])){
        header("location:siswa.php");
    }
    //  include "koneksi.php";

    //  if(isset($_POST['submit'])){
    //     $nisn = mysqli_real_escape_string($koneksi, $_POST['nisn']);
    //     $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    //     $jk = mysqli_real_escape_string($koneksi, $_POST['jk']);
    //     $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
    //     $nohp = mysqli_real_escape_string($koneksi, $_POST['nohp']);

    //     $sql = "UPDATE siswa SET nama='$nama', jk='$jk', alamat='$alamat', nohp='$nohp', WHERE nisn='$nisn'";
    //     $query = mysqli_query($koneksi, $sql);
    // }
    include "koneksi.php";
    if(isset($_POST['submit'])){

        $nisn = mysqli_real_escape_string($koneksi, $_POST['nisn']);
        $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
        $jk = mysqli_real_escape_string($koneksi, $_POST['jk']);
        $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
        $nohp = mysqli_real_escape_string($koneksi, $_POST['nohp']);

        $sql = "UPDATE siswa SET nama='$nama', jk='$jk', alamat='$alamat', nohp='$nohp' WHERE nisn='$nisn'";
        $query = mysqli_query($koneksi, $sql);
    }

    $nisn = $_GET['nisn'];
    $sql = "SELECT*FROM siswa WHERE nisn='$nisn'";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($query);

    ?>
    <h1>Edit Siswa</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>NISN</td>
                <td><input type="text" name="nisn" value="<?= $data['nisn']; ?>"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama" value="<?= $data['nama']; ?>"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td>
                    <input type="radio" name="jk" value="l" <?=$data['jk'] == 'l' ? 'checked': ''?>>Laki-Laki
                    <input type="radio" name="jk" value="p" <?=$data['jk'] == 'p' ? 'checked': ''?>>Perempuan
                </td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td>
                    <textarea name="alamat" id=""><?=$data['alamat']?></textarea>
                </td>
            </tr>
            <tr>
                <td>NO HP</td>
                <td><input type="text" name="nohp" id="" value="<?= $data['nohp']; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Update" name="submit"></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['submit'])){
        if($query){
            echo "Data Berhasil Diupdate";
            ?>
            <a href="siswa.php">Lihat Data</a>
            <?php
        }
    } 
    ?>
</body>
</html>