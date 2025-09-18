<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
     <?php
        $Jumlh_siswa = 30;
        $Lebar_lp = 5;
        $pemimpin_up =5;

        $baris = $Jumlh_siswa / $Lebar_lp;
        $kolom = $Jumlh_siswa / $baris; 
        $p = $Jumlh_siswa - $baris;

        for ($m = 0; $m < $baris; $m++){
            
            for ($i = 0; $i < $kolom; $i++){
                echo "X";
            }
            echo "<br>";
        }
        echo "p";
        echo "<br>";
    ?>

</body>
</html>