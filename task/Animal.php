<?php

class Animal
{
    private $animals;

    public function __construct()
    {
        $this->animals = ["Ayam", "Ikan"];
    }

    public function index()
    {
        return $this->animals;
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

$animal = new Animal();

echo "Index - Menampilkan seluruh hewan";

$animals = $animal->index();
foreach ($animals as $animal) {
    echo "\n" . $animal;
}

echo "Store - Menambahkan hewan baru <br>";
$animal->store('burung');
$animal->index();
echo '<br>';

// echo "Update - Mengupdate hewan <br>";
// $animal->update(0,'kucing');
// $animal->index();
// echo '<br>';

// echo "Destroy - Menghapus hewan <br>";
// $animal->destroy(0);
// $animal->index();
// echo '<br>';
