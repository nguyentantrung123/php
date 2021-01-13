<?php
namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ds_goimon;
class chitiet_hoadonController extends Controller
{
	
	 public function Index()
	 {
        
     }
     public function Create(Request $re)
     {
     	 $chitiet = new ds_goimon;
         $chitiet->SoLuong=$re->SoLuong;
         $chitiet->Gia=$re->Gia;
         $chitiet->MaBan=$re->MaBan;
         $chitiet->MaMon=$re->MaMon;
         $chitiet->ThoiGian=$re->ThoiGian;
         $chitiet->TrangThai=1;
         $chitiet->save();

         return response()->json(["message"=>"tao chi tiet hoa don thanh cong"],201);

     }

}