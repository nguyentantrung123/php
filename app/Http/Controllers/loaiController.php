<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loai_mon;
use Illuminate\Support\Facades\Redirect;

class loaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $dsloai =  loai_mon::where('TrangThai','=',1)->paginate(2);
      return view('loaimon',['dsloai' => $dsloai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createloai');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loai = new loai_mon();+
        $loai->TenLoai = $request->tenloai;
        request()->validate([
            'tenloai' => 'required|min:5'
        ],
        [
            'tenloai.required' => 'Không được để trống',
            'tenloai.min' => 'tên loại phải nhiều hơn 5 ký tự'
        ]);
        $loai->TrangThai = 1;
        $loai->save();
        $dsloai = loai_mon::where('TrangThai','=',1)->get();
        // return view('loaimon',compact('dsloai'));
        return redirect('loai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $loai = loai_mon::find($id);
        return view('showloai',compact('loai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $loai = loai_mon::find($id);
        return view('editloai',compact('loai'));
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
        $loai = loai_mon::find($id);
        $loai->TenLoai = $request->tenloai;
        request()->validate([
            'tenloai' => 'required|min:5'
        ],
        [
            'tenloai.required' => 'Không được để trống',
            'tenloai.min' => 'tên loại phải nhiều hơn 5 ký tự'
        ]);
        $loai->TrangThai = 1;
        $loai->save();
        $dsloai = loai_mon::where('TrangThai','=',1)->get();
        return redirect('loai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loai = loai_mon::findorFail($id);
        $loai->TrangThai = 0;
        $loai->save();
    }
}
