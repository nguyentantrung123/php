<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mon_an_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mon_ans')->insert([
            ["TenMon"=>"Súp gân bò","Gia"=>125,"HinhAnh"=>"1.jpg","Mota"=>"","Loai"=>3,"TrangThai"=>1],
            ["TenMon"=>"Mực áp chảo","Gia"=>95,"HinhAnh"=>"2.jpg","Mota"=>"","Loai"=>4,"TrangThai"=>1],
            ["TenMon"=>"Bò sốt tiêu xanh","Gia"=>189,"HinhAnh"=>"3.jpg","Mota"=>"","Loai"=>4,"TrangThai"=>1],
            ["TenMon"=>"Giò heo nướng kiểu đức","Gia"=>179,"HinhAnh"=>"4.jpg","Mota"=>"","Loai"=>4,"TrangThai"=>1],
            ["TenMon"=>"Rau muống xào tỏi","Gia"=>45,"HinhAnh"=>"5.jpg","Mota"=>"","Loai"=>4,"TrangThai"=>1],
            ["TenMon"=>"Đậu hủ chiên giòn","Gia"=>79,"HinhAnh"=>"6.jpg","Mota"=>"","Loai"=>3,"TrangThai"=>1],
            ["TenMon"=>"Panna cotta","Gia"=>20,"HinhAnh"=>"7.jpg","Mota"=>"","Loai"=>2,"TrangThai"=>1],
            ["TenMon"=>"Súp tổ yến","Gia"=>900,"HinhAnh"=>"8.jpg","Mota"=>"","Loai"=>3,"TrangThai"=>1],
            ["TenMon"=>"Súp hải sản tuyết nhĩ","Gia"=>100,"HinhAnh"=>"9.jpg","Mota"=>"","Loai"=>3,"TrangThai"=>1],
            ["TenMon"=>"Salad bạch tuộc","Gia"=>125,"HinhAnh"=>"10.jpg","Mota"=>"","Loai"=>3,"TrangThai"=>1],
            ["TenMon"=>"Nước ép dưa hấu","Gia"=>30,"HinhAnh"=>"11.jpg","Mota"=>"","Loai"=>1,"TrangThai"=>1],
            ["TenMon"=>"Coca","Gia"=>10,"HinhAnh"=>"12.jpg","Mota"=>"","Loai"=>1,"TrangThai"=>1],
            ["TenMon"=>"Sting","Gia"=>10,"HinhAnh"=>"13.jpg","Mota"=>"","Loai"=>1,"TrangThai"=>1],
            ["TenMon"=>"Sprite","Gia"=>10,"HinhAnh"=>"14.jpg","Mota"=>"","Loai"=>1,"TrangThai"=>1],
            ["TenMon"=>"Vịt quay","Gia"=>300,"HinhAnh"=>"15.jpg","Mota"=>"","Loai"=>4,"TrangThai"=>1],
            ["TenMon"=>"Răng mực nướng","Gia"=>70,"HinhAnh"=>"16.jpg","Mota"=>"","Loai"=>3,"TrangThai"=>1],
            ["TenMon"=>"Salad cá ngừ","Gia"=>100,"HinhAnh"=>"17.jpg","Mota"=>"","Loai"=>3,"TrangThai"=>1]
        ]);
        

    }
}
