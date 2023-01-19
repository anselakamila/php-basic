<?php


trait Sekolah {
    public function namaSekolah() {
        echo "IDN Boarding School";
    }
}

trait alamatSekolah {
    public function almt() {
      echo "Jonggol Dayeuh";
    }
  }

  class tempat {
    use Sekolah;
  }

  class lokasi {
    use Sekolah, alamatSekolah;
    
  }

$school = new tempat();
$school->namaSekolah();
echo "<br>";

$school2 = new lokasi();
$school2->namaSekolah();
$school2->almt();

?>