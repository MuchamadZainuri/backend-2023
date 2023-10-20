<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    // property animals
    public $animals = ["Beruang","Bebek"];

    // method untuk menampilkan semua hewan
    public function index()
    {
        echo "Menampilkan Data Animall\n";

        // loop property animals
        foreach($this->animals as $animal){
            echo "- $animal\n";
        }
    }

    // method untuk menambahkan data hewan
    public function store(Request $request)
    {
        echo "Menambah Data hewan baru\n";
        // menambahkan data ke property animals
        array_push($this->animals, $request->animal);

        // panggil method index
        $this->index();
    }

    // method untuk mengedit data hewan
    public function update(Request $request, $id)
    {
        echo "Mengupdate data hewan id $id \n";

        // update data di property animals
        $this->animals[$id] = $request->animal;

        // panggil method index
        $this->index();
    }

    // method untuk menghapus data hewan
    public function destroy($id)
    {
        echo "Menghapus Data hewan baru id $id";

        unset($this->animals[$id]);

        // panggil method index
        $this->index();
    }

}
