<?php
require_once "bidang.php";
class Segitiga extends Bidang
{
    public $alas;
    public $tinggi;
    public $keterangan;
    public function __construct($nama, $alas, $tinggi)
    {
        parent::__construct($nama);
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    function namaBidang()
    {
        $this->keterangan = "Bidang ini segitiga dengan tinggi " . $this->tinggi . " dan alas " . $this->alas;
        return $this->nama;
    }
    public function luasBidang()
    {
        $luas = $this->alas * $this->tinggi * 0.5;
        return $luas;
    }
    public function kelilingBidang()
    {
        $sisi = sqrt((pow($this->alas, 2) + (pow($this->tinggi, 2))));
        $keliling = $sisi + $this->tinggi + $this->alas;
        return $keliling;
    }
}
