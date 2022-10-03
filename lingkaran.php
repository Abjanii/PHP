<?php
require_once 'BangunDatar.php';
class lingkaran extends BangunDatar{
    protected $jari2;
    public function  __construct($jari2)
    {
        $this->jari2 = $jari2;
    }
    public function namaBidang()
    {
        echo 'Lingkaran';
    }
    public function keterangan()
    {
        echo 'Jari-Jari = ' . $this->jari2;
    }
    public function luasBidang()
    {
        echo 3.14 * $this->jari2 * $this->jari2;
    }
    public function kelilingBidang()
    {
        echo 3.14 * 7 * $this->jari2;
    }
}
