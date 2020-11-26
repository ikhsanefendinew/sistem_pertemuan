<?php

namespace App\Http\Controllers;

use App\Models\UndanganDetails as Details;
use Illuminate\Http\Request;

class UndanganDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getUndanganDetails(){
        return Details::all();
    }
    public function addUndanganDetails(Request $request){
        $details= new Details();
        $details->nama= $request->input('nama');
        $details->id_kertas= $request->input('id_ker');
        $add=$details->save();
        if($add!=null){
            $message="Data berhasil ditambahkan";
        }else{
            $message="Data sudah ada";
        }
        return $message;
    }
    public function updateUndanganDetails(Request $request,$id){
        $nama= $request->input('nama');
        $id_kertas= $request->input('id_ker');
        
        $details=Details::find($id);

        if($nama!=null){
            $details->nama=$nama;
        }
        if($id_kertas!=null){
            $details->id_kertas=$id_kertas;
        }

        $update=$details->save();

        if($update!=null){
            $message="Data berhasil diupdate";
        }else{
            $message="Data gagal diupdate";
        }
        return $message;
    }
    public function deleteUndanganDetails(Request $request,$id){
        $delete=Details::find($id)->delete();
        if($delete!=null){
            $message="Data berhasil dihapus";
        }else{
            $message="Data gagal dihapus";
        }
        return $message;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UndanganDetails  $undanganDetails
     * @return \Illuminate\Http\Response
     */
    public function show(UndanganDetails $undanganDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UndanganDetails  $undanganDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(UndanganDetails $undanganDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UndanganDetails  $undanganDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UndanganDetails $undanganDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UndanganDetails  $undanganDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(UndanganDetails $undanganDetails)
    {
        //
    }
}
