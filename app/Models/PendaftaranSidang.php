<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranSidang extends Model
{
    use HasFactory;
    protected $fillable = [
        'jurusan',
        'prodi',
        'judul_sidang',
        'dosen_pembimbing',
        'file',
    ];
}
