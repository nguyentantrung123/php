<?php

namespace App\Http\Controllers;

use App\nhan_vien;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Collection;

class nhanvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsnv = nhan_vien::where('TrangThai','=',1)->paginate(4);
        return view("nhanvien",['dsnv' => $dsnv]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $nv = nhan_vien::all();
        return view("create_nhanvien",compact("nv"));    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $nv = new nhan_vien();
        $nv->TenNV = $request->input('tennv');
        $nv->GioiTinh = $request->input('gioitinh');
        $nv->NgaySinh = $request->input('ngaysinh');
        $nv->TaiKhoan = $request->input('taikhoan');
        $mk = $request->input('matkhau');
        $nv->MatKhau = md5($mk);
        $nv->TrangThai = 1;
        // request()->validate([
        //     'tennv' => 'required|max:50',
        //     'gioitinh' => 'required',
        //     'taikhoan' => 'required|max:50',
        //     'matkhau' => 'required|max:255'
        // ],[
        //     'tennv.required' =>"Tên không được bỏ trống",
        //     'tennv.max' => 'Tên không được hơn 50 ký tự',
        //      'taikhoan.required' =>"Tên không được bỏ trống",
        //     'taikhoan.max' => 'Tên không được hơn 50 ký tự',   
        //     'mota.required' => 'Mật khẩu không được để trống',
        //     'mota.max' =>'Mật Khẩu không được hơn 255 ký tự'

        // ]);
        $nv->save();

        $nv = nhan_vien::all();
        // return view("thucdon",compact('ds'));
        return redirect('nhanvien');    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $nv = nhan_vien::find($id);
        return view("detail_nhanvien",compact('nv'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $nv = nhan_vien::find($id);    
        return view("edit_nhanvien",compact('nv'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nhanvien = nhan_vien::find($id);
        $nhanvien->TenNV = $request->input('ten');
        $nhanvien->NgaySinh = $request->input('ngay');
        $nhanvien->GioiTinh = $request->gioitinh;
        $nhanvien->TaiKhoan = $request->input('taikhoan');
         $mk = $request->input('matkhau');
        $nhanvien->MatKhau = md5($mk);
       /* $nhanvien->MatKhau = $request->input('matkhau');*/
        $nhanvien->TrangThai = 1;        
        $nhanvien->save();

        $ds = nhan_vien::all();
        // return view("thucdon",compact('ds'));
        return redirect('nhanvien');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mon = nhan_vien::findorFail($id);
        $mon->TrangThai = 0;
        $mon->save();
    }
}
