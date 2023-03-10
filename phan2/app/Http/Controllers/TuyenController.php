<?php

namespace App\Http\Controllers;

use App\Models\Tuyen;
use Illuminate\Http\Request;

class TuyenController extends Controller
{
    public function get($id) {
        return Tuyen::with(['dsga.ga.dstuyen.tuyen'])->find($id);
    }
    public function getInfo($id) {
        return Tuyen::find($id);
    }
}
