<?php
// Nama: NURZILAH HIDAYATI
// NIM: 22090155
// Kelas: 4C

class Komik {
    private $judul;
    private $tahun;
    private $jumlahHalaman;
    private $bahanMaterial;
    private $diskon;
    private $isColorful;

    private function __construct($judul, $tahun, $jumlahHalaman, $bahanMaterial, $diskon, $isColorful) {
        $this->judul = $judul;
        $this->tahun = $tahun;
        $this->jumlahHalaman = $jumlahHalaman;
        $this->bahanMaterial = $bahanMaterial;
        $this->diskon = $diskon;
        $this->isColorful = $isColorful;
    }

    static function createBuku($judul, $tahun, $jumlahHalaman, $bahanMaterial, $diskon, $isColorful) {
        return new Komik($judul, $tahun, $jumlahHalaman, $bahanMaterial, $diskon, $isColorful);
    }

    function getJudul() {
        return $this->judul;
    }

    function getIsColorful() {
        return $this->isColorful;
    }
}

// Buat objek Komik
$komik = Komik::createBuku("One Piece", 1998, 500, "Kertas", 0, true);
echo "Judul Komik: " . $komik->getJudul() . "\n";
?>