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
// echo "jumlah angka ganjil dari 1 sampai 7 =" . $jumlahGanjil . "<br>";

//// if else


$bilangan1 = 6;
$bilangan2 = 5;

if ($bilangan1 > $bilangan2) {
    // echo $bilangan1 . " lebih besar dari" . $bilangan2;
} else {
    // echo $bilangan1 . " lebih Kecil dari" . $bilangan2;
}

// PHP JILID 3
// Local Scope
// membuat sebuah fungsi
function cetakAngka()
{
    $x = 5; // variabel dengan scope local
    echo "Nilai variabel x pada fungsi adalah : $x";
    echo "<br>";
}
cetakAngka(); // valid, gk error
echo '<br>';
// Menggunakan variabel x di luar fungsi akan menghasilkan error
echo "Variable diluar fungsi adalah: $x";

// Global Scope
$x = 5; // Variabel dengan Scope Global memiliki jangkauan global
echo '<br>';
echo '<br>';
echo "Variable diluar fungsi adalah: $x";

echo '<br><br>';
// Membuat global menjadi local scope
$y = 10; // variabel dengan keyword global
function cetakAngkaDua(){
    global $y;
    echo "Nilai dari variabel y adalah $y";
}
cetakAngkaDua();
echo '<br><br>';
echo "Nilai dari variabel y di luar fungsi adalah $y";

// Static Variable

function cetakAngkaIncreament() {
    static $x = 0; // variabel ini nilainya dipertahankan
    echo $x;
    echo '<br>';
    $x++; // disini dilakukan perubahan terhadap variabel x, yakni penambahan 1 angka
}

echo '<br><br>';
cetakAngkaIncreament(); // dideklrasikan,
cetakAngkaIncreament(); // var x dihapus, dan dideklarasikan lagi, pada static, nilai x tadi dipertahankan
cetakAngkaIncreament(); // increment tetap berlanjut

echo '<br><br>';
// Anonymous Function
$fungsiAnonymous = function(){
    $x = 5;
    echo "Variabel ini dicetak di dalam anonymous function $x";
};
$fungsiAnonymous();
echo '<br><br>';

// Anonymous Function dengan parameter
$fungsiAnonymousDenganParameter = function($angka = 10){
    echo "Nilai di dalam fungsi anonymous dengan parameter adalah $angka";
};
$fungsiAnonymousDenganParameter(5); // valid
echo '<br>';
$fungsiAnonymousDenganParameter(); // errpr, too few arguments, param harus ada


echo '<br><br>';
// Callback Function
// membuat fungsi kalimat perintah
function kalimatPerintah($kalimat){
    return "$kalimat !!!";
};
// membuat fungsi kalimat tanya
function kalimatTanya($kalimat){
    return "$kalimat ???";
};

function cetakKalimat($format, $kalimat){
    echo $format($kalimat); // parameter format berubah menjadi sebuah fungsi, callback function
    echo '<br>';
}

cetakKalimat("kalimatPerintah", "Sholat dulu Yuk"); // mengembalikan nilai dari fungsi perintah
cetakKalimat("kalimatTanya", "Apakah Anda sudah sholat"); // mengembalikan nilai dari fungsi tanya
// cetakKalimat("fungsiIniTidakAda", "Fungsi ini tidak ada"); // error, call to undefined function

echo '<br>';
// Penggunaan fungsi bawaan die()
$z = 20;
// echo "Kode ini dieksekusi, nilai z = $z";
// die(); // kode berikutnya tidak akan dieksekusi
// echo "Kode ini tidak dieksekusi, nilai z = $z";
// die dengan parameter pesan
fopen("diary.txt", "r") or die("File gagal dimuat.");
echo "<br>Ini akan dieksekusi jika fopen berhasil memuat file";

echo '<br><br>';
// Penggunaan var_dump();
$angka = 7;
$arrayAngka = [1, 2, 3];
$huruf = 'ABC';
echo $angka; // 7, informasi kurang detail (hanya untuk user/mode produksi)
echo '<br><br>';
var_dump($angka);
echo '<br><br>';
// echo $arrayAngka;
var_dump($arrayAngka);
// die(); // var_dump biasa disandingkan dengan die untuk mempermudah developer

echo '<br><br>';
// var_dump dapat menerima lebih dari satu parameter
echo '<pre>';
var_dump($angka, $arrayAngka, $huruf);
echo '</pre>';