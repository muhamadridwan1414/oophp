<?php
// Object Oriented Programming PHP
// Inheritance
// Studi Kasus: Jualan produk
// Game
// Komik

use Produk as GlobalProduk;

class Produk {
    // properties
    public $judul, $penulis, $penerbit,
           $harga, $jmlHalaman, $waktuMain;
    
    // method / behaviour
    // construct method
    function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0) {
        // isi properties dengan setiap nilai yang user kirim melalui parameter
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel() {
        $str = "{$this->penulis}, {$this->penerbit}";
        return $str;
    }

    public function getInfoProduk() {
        $str = "{$this->jenis} : {$this->judul} | {$this->getLabel()} ({$this->harga})";

        // lakukan pengecekan kondisi berdasarkan parameter yang dikirimkan
        // if ( $this->jmlHalaman > 0 && $this->waktuMain === 0 ) {
        //     $str .= " - {$this->jmlHalaman} halaman.";
        // } else if ( $this->jmlHalaman === 0 && $this->waktuMain > 0 ) {
        //     $str .= " ~ {$this->waktuMain} jam.";
        // }
        return $str;
    }
}

// Implementasi inheritance pada OOPHP
class Komik extends Produk {
    // property class Komik
    public $jmlHalaman;

    // method getInfoProduk() class Komik
    function getInfoProduk() {
        // Komik : Attack On Titan | Hajime Isayama, MAPPA - 100 halaman
        $str = "Komik : {$this->judul} | {$this->getLabel()} ({$this->harga}) - $this->jmlHalaman halaman.";
        return $str;
    }
}

class Game extends Produk {
    // property class Game
    public $waktuMain;

    // method getInfoProduk() class Game
    function getInfoProduk() {
        // Game : Attack On Titan | Hajime Isayama, MAPPA - 100 halaman
        $str = "Game : {$this->judul} | {$this->getLabel()} ({$this->harga}) ~ $this->waktuMain jam.";
        return $str;
    }
}

$produk1 = new Komik("Attack On Titan", "Hajime Isayama", "MAPPA", 45000, 100, 0);
$produk2 = new Game("The Last Of Us", "Neil Druckmann", "SONY Playstation", 145000, 0, 60);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();