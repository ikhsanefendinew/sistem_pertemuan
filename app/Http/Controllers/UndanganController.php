<?php

namespace App\Http\Controllers;

use App\Models\Undangan;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class UndanganController extends Controller
{

    public function getUndangan(){
        return Undangan::all();
    }

    public function addUndangan(Request $request){
        $undangan=new Undangan();
        $undangan->nama= $request->input('nama');
        $undangan->waktu= $request->input('waktu');
        $undangan->kode_barcode= $request->input('kode_barcode');
        $undangan->id_desain= $request->input('id_desain');
        $hasil = $undangan->save();

        if($hasil!=null){
            $message="berhasil disimpan";
        }else{
            $message="tidak disimpan";
        }
        return $message;
    }

    public function updateUndangan(Request $request,$id){
        $undangan=Undangan::find($id);
        
        $nama= $request->input('nama');
        $waktu= $request->input('waktu');
        $kode_barcode= $request->input('kode_barcode');
        $id_desain= $request->input('id_desain');

        if($nama!=null){
            $undangan->nama= $request->input('nama');
        }
        if($waktu!=null){
            $undangan->waktu= $request->input('waktu');
        }
        if($kode_barcode!=null){
            $undangan->kode_barcode= $request->input('kode_barcode');
        }
        if($id_desain!=null){
            $undangan->id_desain= $request->input('id_desain');
        }
        $hasil = $undangan->save();
        
        if($hasil!=null){
            $message="berhasil diupdate";
        }else{
            $message="tidak diupdate";
        }
        return $message;
    }

    public function deleteUndangan(Request $request,$id){
        $undangan=Undangan::find($id);
        if($undangan!=null){
            $undangan->delete();
            $message="Berhasil dihapus";
        }else{
            $message="data tidak diketahui";
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
     * @param  \App\Models\Undangan  $undangan
     * @return \Illuminate\Http\Response
     */
    public function show(Undangan $undangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Undangan  $undangan
     * @return \Illuminate\Http\Response
     */
    public function edit(Undangan $undangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Undangan  $undangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Undangan $undangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Undangan  $undangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Undangan $undangan)
    {
        //
    }
}
