<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
</head>
<body>
    <form action="" method = "post">
        <table>
            <tr>
            <td>Nama</td>
            <td><input type="text" name="Nama" ></td>
        </tr>
        <tr>
            <td>Kelas :</td>
            <td>
                <select name="Kelas"  required>
                    <option value="XI RPL">XI RPL</option>
                    <option value="XI DPIB">XI DPIB</option>
                    <option value="XI TKJ">XI TKJ</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Nilai Tugas :</td>
            <td>
                <input type="number" name="Tugas" min ="0" max = "100"required>
            </td>
        </tr>
        <tr>
            <td>Nilai Absen :</td>
            <td>
                <input type="number" name="Absen" min ="0" max = "100"required>
            </td>
        </tr>
        <tr>
            <td>Nilai UTS :</td>
            <td>
                <input type="number" name="UTS" min ="0" max = "100"required>
            </td>
        </tr>
        <tr>
            <td>Nilai UAS :</td>
            <td>
                <input type="number" name="UAS" min ="0" max = "100"required>
            </td>
        </tr>
        <tr>
            <td>Kirim</td>
            <td>
                <input type="submit" value="Kirim" name ="submit">
            </td>
        </tr>
        </table>
    </form>

    <?php
    if(isset($_POST['submit'])){
        $Nama = $_POST['Nama'];
        $Kelas = $_POST['Kelas'];
        $Absen = $_POST['Absen'];
        $Tugas = $_POST['Tugas'];
        $UTS = $_POST['UTS'];
        $UAS = $_POST['UAS'];

        $Totalnilai = ($Absen * 0.10) + ($Tugas * 0.20) + ($UTS * 0.30) + ($UAS * 0.40);

        if($Totalnilai >= 90 && $Totalnilai <=100){
            $grade = 'A';
        }elseif($Totalnilai >= 80){
            $grade = 'B';
        }elseif($Totalnilai >= 70){
            $grade = 'C';
        }elseif($Totalnilai >= 60){
            $grade = 'D';
        }else{
            $grade = 'E';
        }

        echo "Siswa yang bernama <strong>$Nama </strong>$Kelas </strong>dengan total nilai <strong>$Totalnilai</strong> mendapatkan grade <strong> $grade</strong> ";

    }
    ?>
</body>
</html>