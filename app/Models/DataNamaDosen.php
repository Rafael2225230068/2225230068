<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataNamaDosen extends Model
{
    use HasFactory;
    protected $table = "DataNamaDosen";
    protected $fillable= ['NamaDosen', 'NIDN', 'NIP', 'Jabatan', 'Email'];
}
