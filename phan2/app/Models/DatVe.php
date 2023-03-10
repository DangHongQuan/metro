<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatVe extends Model
{
    use HasFactory;
    protected $table = 'dat_ve';
    public $timestamps = false;

    public function tuyen() {
        return $this->belongsTo(Tuyen::class, 'TuyenId');
    }
    public function galen() {
        return $this->belongsTo(Ga::class, 'GaLenId');
    }
    public function gaxuong() {
        return $this->belongsTo(Ga::class, 'GaXuongId');
    }
}
