<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
}
