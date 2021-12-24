<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranSeminar extends Model
{
    use HasFactory;
    protected $fillable = [
        'jurusan',
        'prodi',
        'judul_proposal',
        'dosen_pembimbing',
        'file',
    ];
}
