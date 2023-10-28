<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentController extends Controller
{
    // Method atau function untuk menampilkan semua data siswa
    public function index(){
        // menggunakan eloquent all() untuk mengambil semua data siswa pada Model Student
        $students = Student::all();

        // membuat data response
        $data = [
            "message" => "Get all students",
            "data" => $students
        ];

        // mengirim data (json) dan kode 200
        return response()->json($data, 200);
    }

    // Method atau function untuk menambahkan data siswa baru
    public function store(Request $request)
    {
        // data yang akan ditambahkan
        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ];

        // menggunakan eloquent create() untuk menambah data siswa baru
        $student = Student::create($input);

        // membuat data response
        $data = [
            "message" => "Student is created successfully",
            "data" => $student,
        ];

        // mengirim data (json) dan kode 201
        return response()->json($data, 201);
    }

    // Method atau function untuk mengubah data siswa
    public function update (Request $request, $id){
        // menggunakan eloquent find() untuk mencari data siswa berdasarkan id
        $student = Student::find($id);
            // menggunakan eloquent update() untuk mengubah data siswa dan menampilkan kembali menggunakan eloquent all()
            $student->update($request->all());

            // membuat data response
            $data = [
                "message" => "Student is updated successfully",
                "data" => $student,
            ];

            // mengirim data (json) dan kode 200
            return response()->json($data, 200);
    }

    // Method atau function untuk menghapus data siswa
    public function delete($id){
        // menggunakan eloquent find() untuk mencari data siswa berdasarkan id
        $student = Student::find($id);
            // jika data siswa tidak ditemukan
            if(!$student){
                // membuat response data
                $data = [
                    "message" => "Student with id $id is not found",
                ];
                // mengirim data (json) dan kode 404
                return response()->json($data, 404);
            }

            // jika data siswa ditemukan maka hapus data siswa
            $student->delete();

            // membuat data response
            $data = [
                "message" => "Student is deleted successfully",
                "dataDeleted" => $student,
            ];

            // mengirim data (json) dan kode 200
            return response()->json($data, 200);
    }

    // Method atau function untuk menampilkan data siswa berdasarkan id
    public function spesifik($id){
        // menggunakan eloquent find() untuk mencari data siswa berdasarkan id
        $student = Student::find($id);

            // membuat data response
            $data = [
                "message" => "Get student by specific id",
                "data" => $student,
            ];

            // mengirim data (json) dan kode 200
            return response()->json($data, 200);
    }

}
