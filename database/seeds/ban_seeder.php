<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ban_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bans')->insert([
            ["TenBan"=>"A1","ViTri"=>"","SoGhe"=>8,"SoNguoi"=>0,"TrangThai"=>1],
            ["TenBan"=>"A2","ViTri"=>"","SoGhe"=>12,"SoNguoi"=>0,"TrangThai"=>1],
            ["TenBan"=>"A3","ViTri"=>"","SoGhe"=>4,"SoNguoi"=>0,"TrangThai"=>1],
            ["TenBan"=>"A4","ViTri"=>"","SoGhe"=>2,"SoNguoi"=>0,"TrangThai"=>1],
            ["TenBan"=>"A5","ViTri"=>"","SoGhe"=>2,"SoNguoi"=>0,"TrangThai"=>1],
            ["TenBan"=>"B1","ViTri"=>"","SoGhe"=>4,"SoNguoi"=>0,"TrangThai"=>1],
            ["TenBan"=>"B2","ViTri"=>"","SoGhe"=>8,"SoNguoi"=>0,"TrangThai"=>1],
            ["TenBan"=>"B3","ViTri"=>"","SoGhe"=>6,"SoNguoi"=>0,"TrangThai"=>1],
            ["TenBan"=>"B4","ViTri"=>"","SoGhe"=>2,"SoNguoi"=>0,"TrangThai"=>1],
            ["TenBan"=>"B5","ViTri"=>"","SoGhe"=>4,"SoNguoi"=>0,"TrangThai"=>1],
            ["TenBan"=>"B6","ViTri"=>"","SoGhe"=>4,"SoNguoi"=>0,"TrangThai"=>1],
            ["TenBan"=>"B7","ViTri"=>"","SoGhe"=>12,"SoNguoi"=>0,"TrangThai"=>1],
            ["TenBan"=>"C1","ViTri"=>"","SoGhe"=>2,"SoNguoi"=>0,"TrangThai"=>1],
            ["TenBan"=>"C2","ViTri"=>"","SoGhe"=>8,"SoNguoi"=>0,"TrangThai"=>1],
            ["TenBan"=>"C3","ViTri"=>"","SoGhe"=>2,"SoNguoi"=>0,"TrangThai"=>1],
            ["TenBan"=>"C4","ViTri"=>"","SoGhe"=>2,"SoNguoi"=>0,"TrangThai"=>1],
            ["TenBan"=>"C5","ViTri"=>"","SoGhe"=>4,"SoNguoi"=>0,"TrangThai"=>1],
            ["TenBan"=>"D1","ViTri"=>"","SoGhe"=>8,"SoNguoi"=>0,"TrangThai"=>1],
            ["TenBan"=>"D2","ViTri"=>"","SoGhe"=>12,"SoNguoi"=>0,"TrangThai"=>1],
            ["TenBan"=>"D3","ViTri"=>"","SoGhe"=>6,"SoNguoi"=>0,"TrangThai"=>1]



        ]);
    }
}
