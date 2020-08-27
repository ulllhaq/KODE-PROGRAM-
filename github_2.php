<?php
//membuat class produk
class produk{

    //membuat property untuk class produk
    public $namaBarang="Mobil", 
             $merk="Rush", 
                 $warna="Hitam";
                 //membuat method 
                 public function cetakProduk(){
                    return "Produknya adalah ...";
                 }
                 public function cetakProduk2(){
                    return "$this->namaBarang, $this->merk, $this->warna";
                 }
}
//membuat object instance dari class
$produk1 = new produk();
$produk2 = new produk();
$produk2->namaBarang="Oli";
$produk2->merk="Yamaha";
$produk2->warna="Hitam";

var_dump($produk1);
echo "<br>";
var_dump($produk2);
echo "<br>";
echo $produk1->cetakProduk();
echo "<br>";
echo $produk2->cetakProduk2();
?>