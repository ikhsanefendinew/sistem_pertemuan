<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
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

    public function getKategori(){
        return Kategori::all();
    }
    
    public function addKategori(Request $request){
        $kategori= new Kategori();
        $kategori->nama=$request->input('nama');
        $kategori->harga=$request->input('harga');
        $kategori->keterangan_produk=$request->input('keterangan');
        $simpan=$kategori->save();

        if($simpan!=null){
            $message="Data berhasil disimpan";
        }else{
            $message="Data sudah disimpan";
        }
        return $message;

    }
    
    public function updateKategori(Request $request,$id){
        $nama=$request->input('nama');
        $harga=$request->input('harga');
        $keterangan=$request->input('keterangan');
        
        $kategori=Kategori::find($id);
        
        if($nama!=null){
            $kategori->nama=$nama;
        }
        if($harga!=null){
            $kategori->harga=$harga;
        }
        if($keterangan!=null){
            $kategori->keterangan_produk=$keterangan;
        }
        $update=$kategori->save();
        if($update!=null){
            $message="Data berhasil diubah";
        }else{
            $message="Gagal update data";
        }
        return $message;
    }
    
    public function deleteKategori(Request $request,$id){
        $delete=Kategori::find($id)->delete();
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
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori)
    {
        //
    }
}
