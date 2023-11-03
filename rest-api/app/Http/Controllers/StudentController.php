<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentController extends Controller
{
    // Method atau function untuk menampilkan semua data siswa
    public function index()
    {
        // menggunakan eloquent all() untuk mengambil semua data siswa pada Model Student
        $students = Student::all();

        // jika data kosong maka kirim status code 204
        if ($students->isEmpty()) {
            $data = ["message" => "Resource is empty"];

            return response()->json($data, 204);
        }

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

        // validasi data request
        $request->validate([
            "nama" => "required",
            "nim" => "required",
            "email" => "required|email",
            "jurusan" => "required"
        ]);

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
    public function update(Request $request, $id)
    {
        // menggunakan eloquent find() untuk mencari data siswa berdasarkan id
        $student = Student::find($id);

        // jika data yang dicari tidak ada, kirim kode 404
        if (!$student) {
            $data = [
                "message" => "Data to found",
            ];

            return response()->json($data, 404);
        }

        // menggunakan eloquent update() untuk mengubah data siswa dan menampilkan kembali menggunakan eloquent all()
        $student->update([
            "nama" => $request->nama ?? $student->nama,
            "nim" => $request->nim ?? $student->nim,
            "email" => $request->email ?? $student->email,
            "jurusan" => $request->jurusan ?? $student->jurusan,
        ]);
        // membuat data response
        $data = [
            "message" => "Student is updated successfully",
            "data" => $student,
        ];
        // mengirim data (json) dan kode 200
        return response()->json($data, 200);
    }

    // Method atau function untuk menghapus data siswa
    public function delete($id)
    {
        // menggunakan eloquent find() untuk mencari data siswa berdasarkan id
        $student = Student::find($id);
        // jika data siswa tidak ditemukan
        if (!$student) {
            // membuat response data
            $data = [
                "message" => "Data to found",
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
    public function spesifik($id)
    {
        // menggunakan eloquent find() untuk mencari data siswa berdasarkan id
        $student = Student::find($id);

        // jika data tidak ada maka kirim status code 404
        if (!$student) {
            $data = [
                "message" => "Data to found",
            ];

            return response()->json($data, 404);
        }
        // membuat data response
        $data = [
            "message" => "Get student by specific id",
            "data" => $student,
        ];

        // mengirim data (json) dan kode 200
        return response()->json($data, 200);
    }
}
