<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Siswa</title>
</head>
<body>
    <h1>Create Siswa</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>NISN</td>
                <td><input type="text" name="nisn" required></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td>
                    <input type="radio" name="jk" value="l" required>Laki-Laki
                    <input type="radio" name="jk" value="p" required>Perempuan
                </td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td>
                    <textarea name="alamat" id=""></textarea>
                </td>
            </tr>
            <tr>
                <td>NO HP</td>
                <td><input type="text" name="nohp" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan" name="submit"></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['submit'])){
        include "koneksi.php";

        $nisn = $_POST['nisn'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $nohp = $_POST['nohp'];

        $sql = "INSERT INTO siswa VALUES ('$nisn','$nama','$jk','$alamat','$nohp')";
        $query = mysqli_query($koneksi,$sql);

        if($query){
            echo "Data Berhasil Disimpan";
            ?>
            <a href="siswa.php">Lihat Data</a>
            <?php
        } 
    }
    ?>
</body>
</html>