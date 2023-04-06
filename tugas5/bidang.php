<?php
abstract class Bidang
{
    protected $nama;
    public function __construct($nama)
    {
        $this->nama = $nama;
    }
    abstract protected function luasBidang();
    abstract protected function kelilingBidang();
}
