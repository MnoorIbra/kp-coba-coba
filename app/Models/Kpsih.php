<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kpsih extends Model
{
    use HasFactory;

    protected $table = 'kpsih';
    protected $fillable = [
        "name",
        "nim",
        "bidang",
        "tahun",
        "koleksi",
        "dosen_pembimbing"

    ];
}
