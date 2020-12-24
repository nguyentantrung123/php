<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class loai_mon_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loai_mons')->insert([
            ["TenLoai" => "Nước uống","TrangThai" => 1],
            ["TenLoai" => "Khai vị","TrangThai" => 1],
            ["TenLoai" => "Món ngọt","TrangThai" => 1],
            ["TenLoai" => "Món chính","TrangThai" => 1],
        ]);

    }
}
