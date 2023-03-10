<?php

namespace App\Http\Controllers;

use App\Models\GaTuyen;
use Illuminate\Http\Request;

class GaController extends Controller
{
    public function getByTuyen($id) {
        return GaTuyen::with(['ga'])
                        ->orderBy('ThuTu','asc')
                        ->where('tuyen_id', $id)
                        ->get();
    }
}
