<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $guarded = [];
    public $timestamps = false;

    public function kelas() {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
}