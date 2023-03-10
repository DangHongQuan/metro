<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TuyenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tuyen = [
            ["MaTuyen"=>"1", "TenTuyen"=>"Tuyến số 1", "ThoiGianHoatDong"=>"5:00 - 21:00", "ChieuDai"=>19.7, "GiaVeToiThieu"=>12000,"DonGiaGa"=>4000],
            ["MaTuyen"=>"2", "TenTuyen"=>"Tuyến số 2", "ThoiGianHoatDong"=>"4:30 - 21:00", "ChieuDai"=>9.1, "GiaVeToiThieu"=>10000,"DonGiaGa"=>3000],
            ["MaTuyen"=>"5A", "TenTuyen"=>"Tuyến số 5A", "ThoiGianHoatDong"=>"5:30 - 20:30", "ChieuDai"=>5.2, "GiaVeToiThieu"=>8000,"DonGiaGa"=>2000],
        ];
        foreach ($tuyen as $data) {
            DB::table('tuyen')->insert($data);
        }
    }
}
