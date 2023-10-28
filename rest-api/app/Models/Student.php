<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Mendefinisikan nama attributes table yang digunakan
    protected $fillable = ["nama", "nim", "email", "jurusan"];

}
