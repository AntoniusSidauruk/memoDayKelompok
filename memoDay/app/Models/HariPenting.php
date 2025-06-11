<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HariPenting extends Model
{
    use HasFactory;

    protected $table = 'hari_pentings';

    protected $fillable = [
        'nama_event',
        'tanggal',
        'kategori',
    ];
}
