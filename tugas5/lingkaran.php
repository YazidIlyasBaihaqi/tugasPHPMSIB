<?php
require_once "bidang.php";
class Lingkaran extends Bidang
{
    public $jari;
    public $keterangan;
    public function __construct($nama, $jari)
    {
        parent::__construct($nama);
        $this->jari = $jari;
    }
    function namaBidang()
    {
        $this->keterangan = "Bidang ini Lingkaran dengan jari jari " . $this->jari;
        return $this->nama;
    }
    public function luasBidang()
    {
        if ($this->jari % 7 == 0) {
            $luas = 22 / 7 * pow($this->jari, 2);
        } else {
            $luas = 3.14 * pow($this->jari, 2);
        }
        return $luas;
    }
    public function kelilingBidang()
    {
        if ($this->jari % 7 == 0) {
            $keliling = 22 / 7 * $this->jari * 2;
        } else {
            $keliling = 3.14 * $this->jari * 2;
        }
        return $keliling;
    }
}
