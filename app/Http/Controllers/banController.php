<?php

namespace App\Http\Controllers;

use App\ban;
use Illuminate\Http\Request;

class banController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsban = ban::where('TrangThai','=',1)->paginate(5);
        return view('ban',['dsban' => $dsban]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('taoban');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ban = new ban();
        $ban->TenBan = $request->input('ten');
        $ban->ViTri = $request->input('vitri');
        $ban->SoNguoi = 0;
        $ban->SoGhe = $request->input('soghe');
        $ban->TrangThai = 1;
        $ban->save();
        return redirect('ban');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ban = ban::find($id);
        return view('showban',compact('ban'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ban = ban::find($id);
        return view('chinhsuaban',compact('ban'));
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
        $ban = ban::find($id);
        $ban->TenBan = $request->input('ten');
        $ban->ViTri = $request->input('vitri');
        $ban->SoNguoi = $request->input('songuoi');
        $ban->SoGhe = $request->input('soghe');
        $ban->TrangThai = 1;
        $ban->save();
        return redirect('ban');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ban = ban::find($id);
        $ban->TrangThai = 0;
        $ban->save();
    }
}
