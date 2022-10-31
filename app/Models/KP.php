<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KP extends Model
{
    use HasFactory;


    protected $table = 'table_kp';
    protected $fillable = [
        "name",
        "nim",
        "bidang",
        "tahun",
        "koleksi",
        "dosen_pembimbing"

    ];
}
