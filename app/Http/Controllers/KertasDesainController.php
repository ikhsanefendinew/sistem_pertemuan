<?php

namespace App\Http\Controllers;

use App\Models\KertasDesain as Kertas;
use Illuminate\Http\Request;

class KertasDesainController extends Controller
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

    public function getKertas(){
        return Kertas::all();
    }
    public function addKertas(Request $request){
        $kertas = new Kertas();
        $kertas->nama=$request->input('nama');
        $kertas->harga=$request->input('harga');
        $add= $kertas->save();
        if ($add!=null) {
            $message="Data berhasil ditambahkan";
        }else{
            $message="Data sudah ada";
        }
        return $message;
    }
    public function updateKertas(Request $request, $id){
        $nama=$request->input('nama');
        $harga=$request->input('harga');
        $kertas=Kertas::find($id);
        if($nama!=null){
            $kertas->nama=$nama;
        }
        if($harga!=null){
            $kertas->harga=$harga;
        }
        $update=$kertas->save();
        if($update!=null){
            $message="Data berhasil diupdate";
        }else{
            $message="Data gagal diupdate";
        }
        
        return $message;
    }
    public function deleteKertas(Request $request, $id){
        $delete=Kertas::find($id)->delete();
        if($delete!=null){
            $message="Data berhasil dihapus";
        }else{
            $message="Data gagal dihapus";
        }return $message;
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
     * @param  \App\Models\KertasDesain  $kertasDesain
     * @return \Illuminate\Http\Response
     */
    public function show(KertasDesain $kertasDesain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KertasDesain  $kertasDesain
     * @return \Illuminate\Http\Response
     */
    public function edit(KertasDesain $kertasDesain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KertasDesain  $kertasDesain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KertasDesain $kertasDesain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KertasDesain  $kertasDesain
     * @return \Illuminate\Http\Response
     */
    public function destroy(KertasDesain $kertasDesain)
    {
        //
    }
}
