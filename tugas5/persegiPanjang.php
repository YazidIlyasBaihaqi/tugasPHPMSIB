<?php
require_once "bidang.php";
class PersegiPanjang extends Bidang
{
    public $panjang;
    public $lebar;
    public $keterangan;
    public function __construct($nama, $panjang, $lebar)
    {
        parent::__construct($nama);
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    function namaBidang()
    {
        $this->keterangan = "Bidang ini Persegi Panjang dengan lebar " . $this->lebar . " dan panjang " . $this->panjang;
        return $this->nama;
    }
    public function luasBidang()
    {
        $luas = $this->panjang * $this->lebar;
        return $luas;
    }
    public function kelilingBidang()
    {
        $keliling = ($this->panjang + $this->lebar) * 2;
        return $keliling;
    }
}
