<?php

namespace App\Http\Controllers;

use App\ban;
use App\mon_an;
use App\loai_mon;
use App\nhan_vien;
use Illuminate\Http\Request;

class SeachController extends Controller
{
    public function timkiem(Request $request){
        $ten = $request->tukhoa;
        $loai = $request->searchId;
        if($loai == 0){
            $ds = mon_an::where('TenMon','like','%'.$ten.'%')->paginate(4);      
        }
        if($loai != 0){
            $ds = mon_an::where([
                ['TenMon', 'like', '%'.$ten.'%'],
                ['Loai', '=', $loai],
                ])->paginate(4);
        }
       
        $dsloai = loai_mon::all();
        return view('searchthucdon',compact('ds'),compact('dsloai'));
    }

    public function timnhanvien(Request $request){
        $key = $request->tennv;
        $dsnv = nhan_vien::where('TenNV','like','%'.$key.'%')->orwhere('NgaySinh','like','%'.$key.'%')
        ->orwhere('GioiTinh','like','%'.$key.'%')->orwhere('TaiKhoan','like','%'.$key.'%')->paginate(1);
        return view('nhanvien',compact('dsnv'));
        
    }

    public function timban(Request $request){
        $key = $request->name_tb;
        $dsban = ban::where('TenBan','like','%'.$key.'%')->paginate(4);
        return view('ban',compact('dsban'));
    }

    public function timloai(Request $request){
        $key = $request->name_type;
        $dsloai = loai_mon::where('TenLoai','like','%'.$key.'%')->paginate(2);
        return view('loaimon',compact('dsloai'));
    }

    public function load_dsban(){
        $dsban = ban::all();
        return view('home',compact('dsban'));
    }
}
