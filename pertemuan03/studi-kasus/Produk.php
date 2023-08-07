<?php
// Object Oriented Programming PHP
// Property & Method
// Studi Kasus: Jualan produk
// Game
// Komik

class Produk {
    public $judul = "judul", // menambahkan nilai default kedalam property
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function getLabel() {
        return "$this->judul, $this->harga";
    }
}

// $produk1 = new Produk();
// timpa nilai default yang ada didalam property
// $produk1->judul = 'The Witcher';
// var_dump($produk1);

// echo "<br>";

// timpa nilai default yang ada didalam property
// $produk2 = new Produk();
// $produk2->judul = 'Jujutsu Kaisen';
// menambahkan property baru setelah object-nya di instansiasi
// $produk2->propertyBaru = 'Ini adalah property baru';
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = 'Attack On Titan';
$produk3->penulis = 'Hajime Isayama';
$produk3->penerbit = 'MAPPA';
$produk3->harga = 45000;
// var_dump($produk3);

$produk4 = new Produk();
$produk4->judul = 'Far Cry 3';
$produk4->penulis = 'Jonathan Doe';
$produk4->penerbit = 'Ubisoft';
$produk4->harga = 30000;

echo "Komik berjudul $produk3->judul, harganya Rp. $produk3->harga"; // cara manual
// memanfaatkan method
echo "<hr>";
echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();

# note: karena scope nya berbeda, apapun nilai yang terdefinisikan didalam produk1 tidak akan mempengaruhi nilai di produk2 maupun nilai default-nya