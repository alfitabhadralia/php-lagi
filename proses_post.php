<?php
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['gender'];
    $hobi = $_POST['hobi'];
    $tombol = $_POST['tombol'];

    echo "<h1>Identitas Mahasiswa</h1>";
    echo "Nama : ".$nama."<br>";
    echo "Umur : ".$umur."<br>";
    echo "Alamat : ".$alamat."<br>";
    echo "Jenis Kelamin : ".$jk."<br>";
    
    echo "Hobi : ";
    for ($i=0; $i < count($hobi) ; $i++){
        echo $hobi[$i].", ";
    }

?>