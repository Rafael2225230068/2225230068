<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rafaelyehuda extends Model
{
    use HasFactory;
    protected $table = "rafaelyehuda";
    protected $fillable= ['Nama', 'NIM', 'Jurusan', 'Semester', 'NomorTelepon'];
}
