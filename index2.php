<?php
class Pelajar{
    var $nama;
    var $kelas;

    function __construct(string $nama, string $kelas){
        echo "objek dibuat\n";
        $this->nama = $nama;
        $this->kelas = $kelas;
    
    }
    function __destruct(){
        echo "objek $this->nama dihapus\n";
    }
    function tulisInformasi(){
        echo "{$this->nama} belajar di {$this->kelas}\n";
    }
}
$budi = new Pelajar('Budi', '1A');
$budi->tulisInformasi();
?>