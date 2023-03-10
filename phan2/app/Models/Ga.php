<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ga extends Model
{
    use HasFactory;
    protected $table = 'ga';
    public $timestamps = false;

    public function dstuyen()
    {
        return $this->hasMany(GaTuyen::class, 'ga_id');
    }
}
