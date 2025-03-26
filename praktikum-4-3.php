<?php

class Mahasiswa {
    public $nim;
    public $nama;
    public $prodi;

    public function kuliah() {
        echo "$this->nama sedang mengikuti kuliah.<br>\n";
    }

    public function ujian() {
        echo "$this->nama sedang mengerjakan ujian <br>\n";
    }

    public function praktikum() {
        echo "$this->nama sedang melakukan praktikum.<br>\n";
    }
}

$mhs1 = new Mahasiswa();
$mhs1->nim = "220001001";
$mhs1->nama = "Budi Santoso";
$mhs1->prodi = "Informatika";

$mhs2 = new Mahasiswa();
$mhs2->nim = "220001002";
$mhs2->nama = "Siti Aminah";
$mhs2->prodi = "Sistem Informasi";

$mhs1->kuliah();
$mhs1->ujian();
$mhs1->praktikum();

echo "<br>"; 

$mhs2->kuliah();
$mhs2->ujian();
$mhs2->praktikum();
?>
