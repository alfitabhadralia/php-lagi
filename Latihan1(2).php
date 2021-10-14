<?php
    //prosedur
    function sik($a, $b){ 
        echo "hallo sik, nama saya ".$a. " Panggilan saya ".$b;
    }

   

    //fungsi

    function sik2(){
        $a = 3;
        $b = 2;

        $c = 3+2;

        return $c;
    }

    sik("Alfita", "Alfita Bhadralia");
    echo "<br>";
    echo sik2();
    echo "<br>";

    $bauh = array ("apel", "jeruk", "mangga", "anggur");

    $umur = array("alfita" => 18, "mariya" => 19, "yemima" => 19);
    
    echo $bauh[1];
    echo "<br>";
    echo $umur["sahril"];

    $angka = array(1,2,3,4,5,6,7);

    foreach($angka as $num){
        echo "<br>";
        echo $num."<br>";
    }

    //array 2 dimensi
    $mhs = array (
        array ("afrizal",18),
        array ("pardip",21),
        array ("alfita",19)

    );

    echo $mhs[1][0];
?>