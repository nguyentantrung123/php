<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\nhan_vien;
/**
 * 
 */
class nhanvienController extends Controller
{
	
	public function Index(){
        $list = nhan_vien::where("TrangThai","=",1)->get();
        echo json_encode(['data'=>$list]);
    }
     public function updatepassword(Request $re){
        $pro=nhan_vien::find($re->id);
        $pro->MatKhau=$re->MatKhau;
        $pro->save();
        return ['result'=>"success","msg"=>"OK!"];


    }
}