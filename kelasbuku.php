<?php

// NAMA: NURZILAH HIDAYATI
// NIM: 22090155
// KELAS: 4C

class Buku {
    private $judul;
    private $tahun;
    private $jumlahHalaman;
    private $bahanMaterial;
    private $diskon;

    public function __construct($judul, $tahun, $jumlahHalaman, $bahanMaterial, $diskon) {
        $this->judul = $judul;
        $this->tahun = $tahun;
        $this->jumlahHalaman = $jumlahHalaman;
        $this->bahanMaterial = $bahanMaterial;
        $this->diskon = $diskon;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function getTahun() {
        return $this->tahun;
    }

    public function getJumlahHalaman() {
        return $this->jumlahHalaman;
    }

    public function getBahanMaterial() {
        return $this->bahanMaterial;
    }

    public function getDiskon() {
        return $this->diskon;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function checkPrice() {
        $harga = 0;

        if ($this->tahun <= 5) {
            if ($this->jumlahHalaman <= 100) {
                $harga = 100000;
            } elseif ($this->jumlahHalaman > 500) {
                $harga = 500000;
            } else {
                $harga = 300000;
            }
        } elseif ($this->tahun > 5 && $this->tahun <= 10) {
            if ($this->jumlahHalaman <= 100) {
                $harga = 50000;
            } elseif ($this->jumlahHalaman > 500) {
                $harga = 250000;
            } else {
                $harga = 150000;
            }
        } else {
            $harga = 10000;
        }

        $hargaDiskon = $harga - ($harga * $this->diskon / 100);

        return $hargaDiskon;
    }
}

// Membuat objek Buku
$buku = new Buku("Calculus", 2024, 1000, "Kertas", 0);
$judul_buku = $buku->getJudul();
echo "Judul Buku: " . $judul_buku;
