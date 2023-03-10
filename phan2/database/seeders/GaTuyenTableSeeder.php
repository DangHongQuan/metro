<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GaTuyenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gaTuyen = [
            ['tuyen_id' => 1, 'ga_id' => 6, 'ThuTu' => 1],
            ['tuyen_id' => 1, 'ga_id' => 21, 'ThuTu' => 2],
            ['tuyen_id' => 1, 'ga_id' => 4, 'ThuTu' => 3],
            ['tuyen_id' => 1, 'ga_id' => 34, 'ThuTu' => 4],
            ['tuyen_id' => 1, 'ga_id' => 28, 'ThuTu' => 5],
            ['tuyen_id' => 1, 'ga_id' => 32, 'ThuTu' => 6],
            ['tuyen_id' => 1, 'ga_id' => 1, 'ThuTu' => 7],
            ['tuyen_id' => 1, 'ga_id' => 26, 'ThuTu' => 8],
            ['tuyen_id' => 1, 'ga_id' => 25, 'ThuTu' => 9],
            ['tuyen_id' => 1, 'ga_id' => 7, 'ThuTu' => 10],
            ['tuyen_id' => 1, 'ga_id' => 33, 'ThuTu' => 11],
            ['tuyen_id' => 1, 'ga_id' => 16, 'ThuTu' => 12],
            ['tuyen_id' => 1, 'ga_id' => 27, 'ThuTu' => 13],
            ['tuyen_id' => 1, 'ga_id' => 9, 'ThuTu' => 14],
            ['tuyen_id' => 2, 'ga_id' => 6, 'ThuTu' => 1],
            ['tuyen_id' => 2, 'ga_id' => 30, 'ThuTu' => 2],
            ['tuyen_id' => 2, 'ga_id' => 11, 'ThuTu' => 3],
            ['tuyen_id' => 2, 'ga_id' => 14, 'ThuTu' => 4],
            ['tuyen_id' => 2, 'ga_id' => 18, 'ThuTu' => 5],
            ['tuyen_id' => 2, 'ga_id' => 23, 'ThuTu' => 6],
            ['tuyen_id' => 2, 'ga_id' => 5, 'ThuTu' => 7],
            ['tuyen_id' => 2, 'ga_id' => 12, 'ThuTu' => 8],
            ['tuyen_id' => 2, 'ga_id' => 19, 'ThuTu' => 9],
            ['tuyen_id' => 2, 'ga_id' => 3, 'ThuTu' => 10],
            ['tuyen_id' => 2, 'ga_id' => 22, 'ThuTu' => 11],
            ['tuyen_id' => 2, 'ga_id' => 31, 'ThuTu' => 12],
            ['tuyen_id' => 2, 'ga_id' => 29, 'ThuTu' => 13],
            ['tuyen_id' => 2, 'ga_id' => 8, 'ThuTu' => 14],
            ['tuyen_id' => 3, 'ga_id' => 10, 'ThuTu' => 1],
            ['tuyen_id' => 3, 'ga_id' => 5, 'ThuTu' => 2],
            ['tuyen_id' => 3, 'ga_id' => 17, 'ThuTu' => 3],
            ['tuyen_id' => 3, 'ga_id' => 15, 'ThuTu' => 4],
            ['tuyen_id' => 3, 'ga_id' => 24, 'ThuTu' => 5],
            ['tuyen_id' => 3, 'ga_id' => 20, 'ThuTu' => 6],
            ['tuyen_id' => 3, 'ga_id' => 2, 'ThuTu' => 7],
            ['tuyen_id' => 3, 'ga_id' => 13, 'ThuTu' => 8],
            ['tuyen_id' => 3, 'ga_id' => 28, 'ThuTu' => 9],
        ];

        foreach ($gaTuyen as $item) {
            DB::table('ga_tuyen')->insert($item);
        }
    }
}
