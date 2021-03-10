<?php

//// Tipe data PAda PHP

$nama = "ogriv";    //tipe Data String

$bolTrue = true;    //tipe Data Boolean
$bolFalse = false;

$integer = 13;      //tipe Data Integer

$float = 2.071992;  ////tipe Data Float

$list = array("ar", "rr", "ra", "ay");  //tipe Data Array


class mobil
{
    var $jenis = "Toyota";
    var $roda = 2;
    var $warna = "Maroon";


    function printAll()
    {
        echo "jenis " . $this->jenis . ", roda " . $this->roda . " warna " . $this->warna;
    }
}


$mobil = new mobil;     //tipe Data Object


// $mobil->printAll();

// $bacafile = fopen("diary.txt", "r");\

$nullable = null;       //tipe Data null



////oprator matematika


$val1 = 6;
$val2 = 3;

$penjumlahan = $val1 + $val2;   //penjumlahan
$pengurangan = $val1 - $val2;   //pengurangan
$perkalian = $val1 * $val2;   //perkalian
$pembagian = $val1 / $val2;   //pembagian
$pangkat = $val1 ** $val2;   //pangkat
$mod = $val1 % $val2;   //sisabagi


//// Aray 

$fruitsArray = array("apple", "manggo", "orange");
$fruitsArray[10] = "dragon Fruit";

$assosiatifArray = array(
    "sepeda" => "roda dua",
    "mobil" => "roda empat",
    "bajai" => "roda tiga",
    "100" => "roda seratus"
);


$ganjilGenap = array("genap", "ganjil");

// $bilangan = 92;

// echo  $bilangan . " adalah " . $ganjilGenap[$bilangan % 2];


// //For
$jumlahGanjil = 0;
for (
    $i = 1;         //inisialisasi awal
    $i <= 7;        //pengecekan kondisi
    $i = $i + 2            // i + 1     i-- = i-1
) {
    $jumlahGanjil = $jumlahGanjil + $i;
    // echo "ini perulangan ke " . $i . "<br>";
}
echo "jumlah angka ganjil dari 1 sampai 7 =" . $jumlahGanjil . "<br>";

//// if else


$bilangan1 = 6;
$bilangan2 = 5;

if ($bilangan1 > $bilangan2) {
    echo $bilangan1 . " lebih besar dari" . $bilangan2;
} else {
    echo $bilangan1 . " lebih Kecil dari" . $bilangan2;
}
