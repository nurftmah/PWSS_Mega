<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Siswa</title>
</head>
<body>
    <h1>Create Siswa</h1>
    <form action="" method="post" enctype="multipart/form-data">
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
                <td>Upload Foto</td>
                <td><input type="file" name="foto" id="" accept="image/*"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan" name="submit"></td>
            </tr>
        </table>
    </form>
    <?php
    
    if(isset($_POST['submit'])){
        include "koneksi.php";

        $nisn = mysqli_real_escape_string($koneksi, $_POST['nisn']);
        $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
        $jk = mysqli_real_escape_string($koneksi, $_POST['jk']);
        $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
        $nohp = mysqli_real_escape_string($koneksi, $_POST['nohp']);

        $foto = $_FILES['foto'];

        if($foto['size'] < 3000000){
            $file_name = basename($foto['name']);
            $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
            $new_file_name = uniqid()."_".time().".".$file_extension;
            if(move_uploaded_file($foto['tmp_name'], 'Foto/'.$new_file_name)){
                if(file_exists('Foto/'.$old_foto_name)){
                unlink('Foto/'.$old_foto_name);
                }
                $sql = "INSERT INTO siswa VALUES ('$nisn','$nama','$jk','$alamat','$nohp','$new_file_name')";
            }else{
                $sql = "INSERT INTO siswa VALUES ('$nisn','$nama','$jk','$alamat','$nohp','-')";
            }

            $query = mysqli_query($koneksi,$sql);
            if($query){
                echo "data berhasil disimpan";
                ?>
                <a href="siswa.php">Lihat Data</a>
                <?php
            }
        }else{
            echo"ukuran terlalu besar";
        }
    }
    ?>
</body>
</html>