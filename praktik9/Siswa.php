<?php

class Siswa{
    var $nis;
    public $nama;
    protected $tahun;
    protected $kota;

    function __construct(){
        $this->nis = "K4131";
        $this->nama = "Kamu";
        $this->tahun = "2005";
        $this->kota = "Bogor";
        $this->CetakData();
    }
    
    function IsiData($nis,$nama,$tahun,$kota){
        $this->nis=$nis;
        $this->nama=$nama;
        $this->tahun=$tahun;
        $this->kota=$kota;
    }

    final public function CetakData(){
        echo"NIS Siswa ".$this->nis."</br>";
        echo"Nama Siswa ".$this->nama."</br>";
        echo"Tahun lahir siswa ".$this->tahun."</br>";
        echo"Kota Asal Siswa ".$this->kota."</br>";
    }

    protected function HitungUmur(){
        $umur = date("Y") - $this->tahun;
        return $umur;
    }
}

?>
