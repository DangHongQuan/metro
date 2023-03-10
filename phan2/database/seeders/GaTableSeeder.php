<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ga = [
            ["TenGa" => "An Phú"],
            ["TenGa" => "Bà Chiểu"],
            ["TenGa" => "Bà Quẹo"],
            ["TenGa" => "Ba Son"],
            ["TenGa" => "Bảy Hiền"],
            ["TenGa" => "Bến Thành"],
            ["TenGa" => "Bình Thái"],
            ["TenGa" => "BX An Sương"],
            ["TenGa" => "BXMĐ mới"],
            ["TenGa" => "Chợ Tân Bình"],
            ["TenGa" => "Dân Chủ"],
            ["TenGa" => "Đồng Đen"],
            ["TenGa" => "Hàng Xanh"],
            ["TenGa" => "Hòa Hưng"],
            ["TenGa" => "Hoàng Văn Thụ"],
            ["TenGa" => "Khu Công nghệ cao"],
            ["TenGa" => "Lăng Cha Cả"],
            ["TenGa" => "Lê Thị Riêng"],
            ["TenGa" => "Nguyễn Hồng Đào"],
            ["TenGa" => "Nguyễn Văn Đậu"],
            ["TenGa" => "Nhà hát TP"],
            ["TenGa" => "Phạm Văn Bạch"],
            ["TenGa" => "Phạm Văn Hai"],
            ["TenGa" => "Phú Nhuận"],
            ["TenGa" => "Phước Long"],
            ["TenGa" => "Rạch Chiếc"],
            ["TenGa" => "Suối Tiên"],
            ["TenGa" => "Tân Cảng"],
            ["TenGa" => "Tân Thới Nhất"],
            ["TenGa" => "Tao Đàn"],
            ["TenGa" => "Tham Lương"],
            ["TenGa" => "Thảo Điền"],
            ["TenGa" => "Thủ Đức"],
            ["TenGa" => "Văn Thánh"]
        ];
        foreach ($ga as $row) {
            DB::table('ga')->insert($row);
        }
    }
}
