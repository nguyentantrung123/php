<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ban;

class banController extends Controller
{
    public function Index(){
        $list = ban::where("TrangThai","=",1)->get();
        echo json_encode(['data'=>$list]);
    }
}
