<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ban;

class banController extends Controller
{
    public function Index(){
        $list = ban::where("TrangThai","!=",0)->get();
        echo json_encode(['data'=>$list]);
    }
     public function Moban(Request $re){
    	$pro=ban::find($re->id);
    	$pro->SoNguoi=$re->SoNguoi;
		$pro->TrangThai=2;
		$pro->save();
    	return ['result'=>"success","msg"=>"moban"];

    }
    public function Dongban(Request $re){
        $pro=ban::find($re->id);
        $pro->TrangThai=1;
        $pro->SoNguoi=0;
        if($pro->save())
        {
            return ['result'=>"success","msg"=>"dongban"];
        }
    }
    
}
