<?php

namespace App\Http\Controllers;

use App\mon_an;
use App\loai_mon;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Collection;

class mon_anController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mon_ans = mon_an::where('TrangThai','=',1)->paginate(5);
        $dsloai = loai_mon::all();
        return view("thucdon",['mon_ans' => $mon_ans],compact('dsloai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsloai = loai_mon::where('TrangThai','=',1)->get();
        return view("createthucdon",compact("dsloai"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        $mon = new mon_an();
        $mon->TenMon = $request->input('ten');
        $mon->Gia = $request->input('gia');
        $mon->MoTa = $request->input('mota');
        $mon->Loai = $request->input('loai');
        $mon->TrangThai = 1;
        request()->validate([
            'ten' => 'required|max:50',
            'gia' => 'required',
            'hinh' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'mota' => 'required|max:255'
        ],[
            'ten.required' =>"Tên không được bỏ trống",
            'ten.max' => 'Tên không được hơn 50 ký tự',
            'gia.required' =>"Giá không được bỏ trống",
            'hinh.required'=>'Không được để trống',
            'hinh.image'=>'Phải là hình ảnh',
            'hinh.max'=>'Kích thươc không quá 1024MB',
            'hinh.mimes' => 'Phải là hình ảnh',
            'mota.required' => 'Mô tả không được để trống',
            'mota.max' =>'Mô tả không được hơn 255 ký tự'

        ]);
        $file = $request->file('hinh');
        $new_image = rand().'.'.$file->getClientOriginalExtension();
        $file->move(public_path("images"),$new_image); 
        $mon->HinhAnh = $new_image;
        $mon->save();

        $ds = mon_an::all();
        // return view("thucdon",compact('ds'));
        return redirect('thucdon');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sp = mon_an::find($id);
        return view("showthucdon",compact('sp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sp = mon_an::find($id);
        $dsloai = loai_mon::where('TrangThai','=',1)->get();
    
        return view("editthucdon",compact('sp'),compact('dsloai'));
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
        $mon = mon_an::find($id);
        $mon->TenMon = $request->input('ten');
        $mon->Gia = $request->input('gia');
        $mon->MoTa = $request->input('mota');
        $mon->Loai = $request->input('loai');
        $mon->TrangThai = 1;
        request()->validate([
            'hinh' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ]);
        $file = $request->file('hinh');
        $new_image = rand().'.'.$file->getClientOriginalExtension();
        $file->move(public_path("images"),$new_image); 
        $mon->HinhAnh = $new_image;
        $mon->save();

        $ds = mon_an::all();
        // return view("thucdon",compact('ds'));
        return redirect('thucdon');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mon = mon_an::findorFail($id);
        $mon->TrangThai = 0;
        $mon->save();
        
    }  
}
