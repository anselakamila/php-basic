<?php
class Vegetable{

    public $nama;
    public $warna;

    public function sayHello() {
        return "Hellooow";

    }

      function getLabel() {
        return "$this->nama, $this->warna";
      }
    
}

$bayam = new Vegetable();
$bayam ->nama = "Kangkung";
$bayam ->warna = "Hijau";

// echo "Nama: " . $bayam->getLabel();
// echo "<br>";
// echo "Warna: " . $bayam->getLabel();

echo $bayam->sayHello();
echo $bayam->getLabel();

$wortel = new Vegetable();


?>



