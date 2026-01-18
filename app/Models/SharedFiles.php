<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SharedFiles extends Model
{
    use HasFactory;

    protected $table = 'shared_files';

    protected $fillable = [
        'nama',
        'path',
        'jenis',
    ];
}
