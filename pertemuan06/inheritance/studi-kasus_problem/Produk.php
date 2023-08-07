<?php
// Object Oriented Programming PHP
// Inheritance
// Studi Kasus: Jualan produk
// Game
// Komik

class Produk {
    // deklarasi property
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain,
           $jenis;

    // deklarasi construct method
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $jenis = NULL) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->jenis = $jenis;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap() {
        // Attack On Titan | Hajime Isayama, MAPPA (Rp. 45000) - 80 halaman
        $str = "{$this->judul} | {$this->getLabel()} - ";
        if ( $this->jmlHalaman > 0 && $this->waktuMain == 0 && $this->jenis == "halaman") {
            $str .= "{$this->jmlHalaman} {$this->jenis}";
        } elseif ( $this->jmlHalaman == 0 && $this->waktuMain > 0 && $this->jenis == "jam") {
            $str .= "{$this->waktuMain} {$this->jenis}";
        }
        return $str;
    }
}


// implementasi object type
class CetakInfoProduk {
    // memiliki satu buah method
    // supaya fungsi cetak() hanya menerima secara spesifik class produk (hanya class produk yang diperbolehkan menjadi bagian dari parameter yang ditangkap method cetak), kita perlu menambahkan tipe-nya yaitu Produk.
    // tipe objek yang digunakan adalah Produk. Pada parameter method cetak(), terdapat deklarasi tipe data $produk dengan tipe Produk. Ini menandakan bahwa parameter yang diterima oleh method cetak() harus berupa objek dari kelas Produk.
    // intinya kita dapat mendefinisikan sebuah object dan kemudian menjadikannya sebuah tipe-data tersendiri.
    public function cetak ( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} ({$produk->harga}).";
        return $str;
    }
}

// instansiasi object produk
$produk1 = new Produk('Attack On Titan', 'Hajime Isayama', 'MAPPA', 35000, 150, 0, "halaman");
$produk2 = new Produk("Far Cry 3", "Jonathan Doe", "Ubisoft", 300000, 0, 30, "jam");

// Attack On Titan | Hajime Isayama, MAPPA (Rp. 45000) - 80 halaman
echo $produk1->getInfoLengkap();
echo "<br>";
echo "<br>";
// Far Cry 3 | Jonathan Doe, Ubisoft (Rp. 300000) ~ 30 jam