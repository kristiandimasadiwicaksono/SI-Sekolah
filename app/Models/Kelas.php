<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';

    protected $guarded = [];
    public $timestamps = false;

    public function guru() {
        return $this->belongsTo(Guru::class, 'id_guru');
    }
}
