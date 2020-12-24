<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nhan_vien_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nhan_viens')->insert([
            ["TenNV"=>"Võ Trọng Tín","NgaySinh"=>"2000/08/03","GioiTinh"=>"Nam","TaiKhoan"=>"trongtin0011","MatKhau"=>bcrypt("123456789"),"TrangThai"=>1],
            ["TenNV"=>"Nguyễn Tấn Trung","NgaySinh"=>"2000/10/08","GioiTinh"=>"Nam","TaiKhoan"=>"trung0011","MatKhau"=>bcrypt("123456780"),"TrangThai"=>1]
        ]);
    }
}