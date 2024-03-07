<?php
class Pelajar{
    var $nama;
    var $kelas;

    function __construct(){
        echo "objek dibuat\n";
    
    }
    function __destruct(){
        echo "objek $this->nama dihapus\n";
    }
    function tulisInformasi(){
        echo "{$this->nama} belajar di {$this->kelas}\n";
    }
}
$budi = new Pelajar();
$budi->nama = 'Budi';
$budi->kelas = '1A';
$budi->tulisInformasi();
?>