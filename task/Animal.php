<?php

class Animal
{
    private $animals = [];

    public function __construct()
    {
        $this->animals = ["Ayam", "Ikan"];
    }

    public function index()
    {
        $no = 0;
        foreach ($this->animals as $animal) {
            echo "\n" . ++$no . "." . $animal;
            
        };
    }

    public function store($data)
    {
        array_push($this->animals, $data);
    }

    public function update($index, $data)
    {
        $this->animals[$index] = $data;
    }


    public function destroy($index)
    {
        unset($this->animals[$index]);
    }
}

$animal = new Animal([]);

echo "Index - Menampilkan seluruh hewan";
$animal->index();
echo "\n";

echo "\nStore - Menambahkan hewan baru";
$animal->store('burung');
$animal->index();
echo "\n";

echo "\nUpdate - Mengupdate hewan";
$animal->update(0, 'Kucing Anggora');
$animal->index();
echo "\n";

echo "\nDestroy - Menghapus hewan";
$animal->destroy(1);
$animal->index();
echo "\n";
