<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\mon_an;

class mon_anController extends Controller
{
    public function Index(){
        $list = mon_an::where("TrangThai","=",1)->get();
        echo json_encode(['data'=>$list]);
    }
}
