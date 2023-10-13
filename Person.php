<?php

class Person{
    public $nama;
    public $alamat;
    public $jurusan;

    public function __construct($nama, $alamat, $jurusan)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function setAlamat($alamat){
        $this->alamat = $alamat;
        
    }

    public function setJurusan($jurusan){
        $this->jurusan = $jurusan;
    }

    public function getPerson(){
        echo "\nNama: ". $this->nama;
        echo "\nAlamat: ". $this->alamat;
        echo "\nJurusan: ". $this->jurusan;
        echo "\n";
    }

}

$person1 = new Person("M.Zainuri", "Depok", "Software Engineering");
$person2 = new Person("Budi Gunawan", "Bandung", "Administrasi Perkantoran");
$person3 = new Person("Sigit Rendang","Bogor","Matematika dan Sains");

echo "\n------------------Data Awal-----------------\n";
$person1->getPerson();
$person2->getPerson();
$person3->getPerson();

$person1->setAlamat("Yogyakarta");
$person2->setJurusan("Cyber Security");
$person3->setNama("Sigit Khannedy");

echo "\n------------------Sesudah Diubah-----------------\n";
$person1->getPerson();
$person2->getPerson();
$person3->getPerson();

