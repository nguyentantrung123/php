<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\loai_mon;

class loai_monController extends Controller
{
    public function Index(){
        $list = loai_mon::where("TrangThai","=",1)->get();
        echo json_encode(['data'=>$list]);
    }
}
