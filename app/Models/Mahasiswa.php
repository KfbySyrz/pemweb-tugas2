<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //nama table
    protected $table = 'mahasiswa';

    //kolom yang diisi
    protected $fillable = ['nim', 'nama', 'alamat', 'hobi'];
}
