<?php

// class mobil
class Mobil {
    // properties
    public $nama, $merk, $warna,
    $kecepatanMaks, $jumlahPenumpang;

    // method / behaviour
    function tambahKecepatan() {    // secara default visibility nya adalah public
        return "Kecepatan bertambah!";
    }
}

// implementasi class child
// class ini nantinya bisa mengakses setiap part / bagian dari parent-nya
class MobilSport extends Mobil {
    // property mobil sport
    public $turbo = false;

    // method / behaviour mobil sport
    function nyalakanTurbo() {
        $this->turbo = true;
        return "Turbo dinyalakan!";
    }
}

// instansiasi object
$mobil1 = new MobilSport();

// cetak output
echo $mobil1->nyalakanTurbo();
echo "<br>";
echo $mobil1->tambahKecepatan();

