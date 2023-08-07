<?php
// Object Oriented Programming PHP
// Object-type
// Studi Kasus: Jualan produk
// Game
// Komik

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
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

// Film dan Series
class Entertainment {
    public $judul,
           $rilis,
           $sutradara,
           $pemeran,
           $studio;

    // method construct
    public function __construct($judul, $rilis, $sutradara, $pemeran, $studio) {
        $this->judul = $judul;
        $this->rilis = $rilis;
        $this->sutradara = $sutradara;
        $this->pemeran = $pemeran;
        $this->studio = $studio;
    }

    // method getLabel
    public function getLabel() {
        return "{$this->sutradara}, {$this->pemeran} - {$this->studio}";
    }
}

class InfoEntertainment {
    // memiliki 1 buah method
    public function cetak( Entertainment $entertainment ) {
        $str = "{$entertainment->judul} | {$entertainment->getLabel()} ({$entertainment->rilis})";
        return $str;
    }
}

// instansiasi object produk
$produk1 = new Produk('Attack On Titan', 'Hajime Isayama', 'MAPPA');
$produk2 = new Produk("Far Cry 3", "Jonathan Doe", "Ubisoft", 300000);

// instansiasi object entertainment
$entertainment1 = new Entertainment("Breaking Bad", "20 Januari 2008", "Vince Gilligan", "Bryan Cranston", "AMC");

// object infoproduk
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);

echo "<br>";

// object infoentertainment
$infoEntertainment1 = new InfoEntertainment();
echo $infoEntertainment1->cetak($entertainment1);