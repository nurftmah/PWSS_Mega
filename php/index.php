<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <table>
        <tr>
            <td>Pilih Kelas</td>
            <td>
                <select name="kelas" id="">
                    <option value="Eksekutif">Eksekutif</option>
                    <option value="Bisnis">Bisnis</option>
                    <option value="Ekonomi">Ekonomi</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>
                <input type="radio" name="Jurusan" id="" value="1">tasik - jakarta 
                <input type="radio" name="Jurusan" id="" value="2">tasik - bandung
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Lihat Harga" name="submit">
            </td>
        </tr>
    </table>
</form>
    <?php
    // $TPA = 90 ;
    // $tinggi = 170;

    // if($TPA >= 85 && $tinggi >= 170){
    //     echo "Lulus";
    // } else {
    //     echo "Tidak Lulus";
    // }
    if(isset($_POST["submit"])){
        $kelas = $_POST["kelas"];
        $jurusan = $_POST["Jurusan"];

    

    if($kelas == "Eksekutif" && $jurusan == "1"){
        $harga = 200000;
        $diskon = $harga*0.2;
        $hasil = $harga - $diskon;
        echo "Harga :Rp.".$hasil;
    } elseif($kelas == "Eksekutif" && $jurusan == "2"){
        $harga = 80000;
        $diskon = $harga*0.2;
        $hasil = $harga - $diskon;
        echo "Harga :Rp.".$hasil;
    }elseif($kelas == "Bisnis" && $jurusan == "1"){
        echo "Rp.150000";
    }elseif($kelas == "Bisnis" && $jurusan == "2"){
        echo "Rp.40000";
    }elseif($kelas == "Ekonomi" && $jurusan == "1"){
        echo "Rp.100000";
    }elseif($kelas == "Ekonomi" && $jurusan == "2"){
        echo "35000";
    }else{
        echo "Harga tidak ada";
    }
}

    ?>
</body>
</html>