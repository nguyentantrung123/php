<?php

namespace App\Http\Controllers;
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
            $ds = mon_an::where('TenMon','like','%'.$ten.'%')->get();      
        }
        if($loai != 0){
            $ds = mon_an::where([
                ['TenMon', 'like', '%'.$ten.'%'],
                ['Loai', '=', $loai],
                ])->get();
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
}
