<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\hoa_don;
/**
 * 
 */
class hoa_donController extends Controller
{
	
	 public function Index()
	 {
	 	$list = hoa_don::where("TrangThai","!=",0)->get();
        echo json_encode(['data'=>$list]);
        
     }
     public function Create(Request $re)
     {

         $hoadon = new hoa_don;
         $hoadon->TongTien=$re->TongTien;
         $hoadon->ThoiGianLap=$re->ThoiGianLap;
         $hoadon->MaBan=$re->MaBan;
         $hoadon->MaNV=$re->MaNV;
         $hoadon->TrangThai=$re->TrangThai;
         $hoadon->save();

         return response()->json(["message"=>"tao hoa don thanh cong"],201);

       

     }

}