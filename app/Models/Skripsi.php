<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skripsi extends Model
{
    use HasFactory;

    protected $table = 'table_skripsi';
    protected $fillable = [
        "name",
        "nim",
        "bidang",
        "tahun",
        "koleksi",
        "dosen_pembimbing"

    ];

}
