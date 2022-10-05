<?php
require_once 'BangunDatar.php';
class segitiga extends BangunDatar{
    protected $alas;
    protected $tinggi;
    public function  __construct($alas, $tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function namaBidang()
    {
        echo 'Segitiga';
    }
    public function keterangan()
    {
        echo 'Alas = ' . $this->alas . '<br>Tinggi = ' . $this->tinggi;
    }
    public function luasBidang()
    {
        echo ($this->alas * $this->tinggi) * 0.5;
    }
    public function kelilingBidang()
    {
        $a = $this->alas;
        $b = $this->tinggi;
        $c = sqrt(pow($a, 2) + pow($b, 2));
        echo $a + $b + $c;
    }
}
