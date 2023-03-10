<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuyen extends Model
{
    use HasFactory;
    protected $table = 'tuyen';
    public $timestamps = false;

    public function dsga()
    {
        return $this->hasMany(GaTuyen::class, 'tuyen_id')->orderBy('ThuTu', 'desc');
    }
}
