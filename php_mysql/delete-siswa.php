<?php
if(isset($_GET['nisn'])){
    include "koneksi.php";
    $nisn =$_GET['nisn'];
    $sql = "DELETE FROM siswa WHERE nisn = $nisn";
    $query = mysqli_query($koneksi, $sql);
    if($query){
        header("location: siswa.php");
    }else{
        echo "Data gagal dihapus";
    }
}else{
    echo "Not Found";
}