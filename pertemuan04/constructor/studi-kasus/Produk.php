<?php
// Object Oriented Programming PHP
// Constructor
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
        return "$this->judul, $this->harga";
    }
}

$produk3 = new Produk('Attack On Titan', 'Hajime Isayama', 'MAPPA');
echo "
<ul>
    <li>Judul : $produk3->judul</li>
    <li>Penulis : $produk3->penulis</li>
    <li>Penerbit : $produk3->penerbit</li>
    <li>Harga : $produk3->harga</li>
</ul>
";

$produk4 = new Produk("Far Cry 3", "Jonathan Doe", "Ubisoft", 300000);
// var_dump($produk4);

echo "
<ul>
    <li>Judul : $produk4->judul</li>
    <li>Penulis : $produk4->penulis</li>
    <li>Penerbit : $produk4->penerbit</li>
    <li>Harga : $produk4->harga</li>
</ul>
";
