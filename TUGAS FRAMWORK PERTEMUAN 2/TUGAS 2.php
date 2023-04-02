<?php

// Kelas Hewan sebagai kelas induk
class Hewan {
    // Property
    public $nama;

    // Konstruktor
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Method
    public function berjalan() {
        echo $this->nama . " sedang berjalan." . "<br>";
    }

    public function makan() {
        echo $this->nama . " sedang makan." . "<br>";
    }

    public function bersuara() {
        echo $this->nama . " sedang bersuara." . "<br>";
    }
}

// Kelas Monyet sebagai kelas turunan dari Hewan
class Monyet extends Hewan {
    // Property
    public $bisa_berkendara;

    // Konstruktor
    public function __construct($nama, $bisa_berkendara) {
        parent::__construct($nama);
        $this->bisa_berkendara = $bisa_berkendara;
    }

    // Method
    public function berkendara() {
        if ($this->bisa_berkendara) {
            echo $this->nama . " bisa berkendara." . "<br>";
        } else {
            echo $this->nama . " belum bisa berkendara." . "<br>";
        }
    }
}

// Membuat objek dari kelas Hewan
$hewan = new Hewan("Hewan");

// Memanggil method pada objek Hewan
$hewan->berjalan();
$hewan->makan();
$hewan->bersuara();

// Membuat objek dari kelas Monyet
$monyet = new Monyet("Monyet", true);

// Memanggil method pada objek Monyet
$monyet->berjalan();
$monyet->makan();
$monyet->bersuara();
$monyet->berkendara();

?>
