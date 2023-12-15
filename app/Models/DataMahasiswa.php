<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMahasiswa extends Model
{
    use HasFactory;
    protected $table = "datamahasiswa";
    protected $fillable =  ['NamaMahasiswa', 'NIM', 'Semester', 'Email'];
}
