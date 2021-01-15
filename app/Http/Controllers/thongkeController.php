<?php

namespace App\Http\Controllers;

use App\ds_goimon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class thongkeController extends Controller
{
    public function thongkemon(){
        $dstk = ds_goimon::join('mon_ans', 'ds_goimons.MaMon', '=', 'mon_ans.id')
                        ->join('bans', 'ds_goimons.MaBan', '=', 'bans.id')
                        ->select('ds_goimons.id as id','SoLuong','mon_ans.TenMon as TenMon','bans.TenBan as TenBan','ds_goimons.Gia as Gia','ThoiGian','ds_goimons.TrangThai as TrangThai')
                        ->where('ds_goimons.TrangThai','=',1)
                        ->get();
        return view('tkmonan',compact('dstk'));
    }
}
