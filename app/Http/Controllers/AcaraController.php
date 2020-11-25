<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use Illuminate\Http\Request;

class AcaraController extends Controller
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

    public function getAcara(){
        return Acara::all();
    }
    
    public function addAcara(Request $request){
        $waktu=date("Y:m:d H:i:s", strtotime($request->input('waktu')));

        $acara=new Acara();
        $acara->nama_teman=$request->input('nama');
        $acara->alamat=$request->input('alamat');
        $acara->jumlah=$request->input('jumlah');
        $acara->waktu=$waktu;
        $acara->save();
        return "Berhasil Menambahkan";
    }

    public function updateAcara(Request $request, $id){
        $waktu=date("Y:m:d H:i:s", strtotime($request->input('waktu')));
        $acara=Acara::find($id);
        $nama_teman=$request->input('nama');
        $alamat=$request->input('alamat');
        $jumlah=$request->input('jumlah');
        // $waktu=$waktu;
        if($nama_teman!=null){
            $acara->nama_teman=$request->input('nama');
        }
        if($alamat!=null){
            $acara->alamat=$request->input('alamat');
        }
        if($jumlah!=null){
            $acara->jumlah=$request->input('jumlah');
        }
        // if($waktu!=null){
        //     $acara->waktu=$waktu;
        // }
        $acara->save();
        return "Berhasil diupdate";

    }

    public function deleteAcara(Request $request, $id){
        $acara=Acara::find($id);
        // return print_r($acara);
        if($acara!=null){
            $acara->delete();
            $message="berhasil dihapus";
        }else{
            $message="Data tidak diketahui";
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
     * @param  \App\Models\Acara  $acara
     * @return \Illuminate\Http\Response
     */
    public function show(Acara $acara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acara  $acara
     * @return \Illuminate\Http\Response
     */
    public function edit(Acara $acara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Acara  $acara
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acara $acara)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acara  $acara
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acara $acara)
    {
        //
    }
}
