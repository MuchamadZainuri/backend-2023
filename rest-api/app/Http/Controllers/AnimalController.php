<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index() {
        echo "Menampilkan Data animals";
    }

    public function store(Request $request) {
        echo "Nama hewan: $request->nama";
        echo "\n";
        echo "Menambah Data hewan baru";
    }

    public function update(Request $request,$id) {
        echo "Nama hewan: $request->nama";
        echo "\n";
        echo "Mengupdate Data hewan baru id $id";
    }
    public function destroy($id) {
        echo "Menghapus Data hewan baru id $id";
    }
}
