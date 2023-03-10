<?php

namespace App\Http\Controllers;

use App\Models\DatVe;
use Illuminate\Http\Request;

class TimVeController extends Controller
{
    public function index() {
        return view('searchticket');
    }
    public function search(Request $request) {
        $phone = $request->query('phone');
        return DatVe::with(['tuyen','galen','gaxuong'])->where('DienThoai', $phone)->get();
    }
}
