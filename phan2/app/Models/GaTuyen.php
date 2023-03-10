<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaTuyen extends Model
{
    use HasFactory;
    protected $table = 'ga_tuyen';
    public $timestamps = false;

    public function ga() {
        return $this->belongsTo(Ga::class, 'ga_id');
    }
    public function tuyen() {
        return $this->belongsTo(Tuyen::class, 'tuyen_id');
    }
}
