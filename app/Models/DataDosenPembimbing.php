<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataDosenPembimbing extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'nip_niph',
        'jurusan',
        'prodi',
    ];
}
