<?php

namespace App\Http\Controllers;

use App\Models\DatVe;
use App\Models\Tuyen;
use Illuminate\Http\Request;

class DatVeController extends Controller
{
    public function index() {
        $tuyen = Tuyen::all();
        return view('ticket')->with(['dsTuyen' => $tuyen]);
    }

    public function datVe(Request $request) {
        $data = new DatVe;
        $data->ThoiGianDat = now();
        $data->TuyenId = $request->TuyenId;
        $data->DienThoai = $request->DienThoai;
        $data->GaLenId = $request->GaLenId;
        $data->GaXuongId = $request->GaXuongId;
        $data->SoLuong = $request->SoLuong;
        $data->ThanhTien = $request->ThanhTien;
        $data->save();
        return $data;
    }
}
