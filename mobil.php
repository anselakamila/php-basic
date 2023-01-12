<?php

class Mobil{

    public $nama;
    public $merk;
    public $warna;
    public $tipeMesin;
    public $kecepatanMaksimal;

    public function tambahKecepatan() {

    }

    public function kurangiKecepatan() {

    }

    public function belokKanan() {

    }

    public function tambahKanan() {

    }

    public function sayHello() {
        return "Hello Adeeva";

    }

    public function getLabel() {
        return "$this->nama, $this->merk";
    }

}

$mobil_adeeva = new Mobil();
$mobil_adeeva ->nama = "Lamborghini aventor";
$mobil_adeeva ->merk = "Lamborghini";
$mobil_adeeva ->warna = "Abu";
$mobil_adeeva ->kecepatanMaksimal = "2000";

// echo "Mobil Adeeva :".$mobil_adeeva ->nama,mobil_adeeva ->merk;
$mobil_marsya = new Mobil();

echo $mobil_adeeva->sayHello();
echo $mobil_adeeva->getLabel();


// var_dump($mobil_adeeva)

?>