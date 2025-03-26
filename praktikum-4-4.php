<?php

$jurusan = array("teknik informatika", "teknik komputer", "ilmu komputer", "sistem informasi", "teknologi informasi", "pendidikan teknologi informasi");

echo "Daftar Jurusan:\n";
foreach ($jurusan as $jurusanItem) {
    echo "<br>- $jurusanItem";
}

echo "<br>"; 
echo "<br>"; 

$mahasiswa = array(
    "nama" => "Budi",
    "nim" => "220001001",
    "prodi" => "Informatika",
    "kampus" => "Universitas XYZ"
);

echo "Data Mahasiswa:\n";
foreach ($mahasiswa as $key => $value) {
    echo "<br>$key: $value\n";
}
?>
