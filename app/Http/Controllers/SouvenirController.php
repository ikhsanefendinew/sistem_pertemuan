<?php

namespace App\Http\Controllers;

use App\Models\Souvenir;
use Illuminate\Http\Request;

class SouvenirController extends Controller
{
    public function getSouvenir(){
        return Souvenir::all();   
    }
    
    public function addSouvenir(Request $request){
        $souvenir= new Souvenir();   
        $souvenir->nama=$request->input('nama');
        $souvenir->jumlah_pesanan=$request->input('jumlah');
        $souvenir->id_pembayaran=$request->input('id_p');
        $souvenir->id_kategori=$request->input('id_k');
        $tambah=$souvenir->save();
        if($tambah!=null){
            $message="Data berhasil disimpan";
        }else{
            $message="Data gagal disimpan";
        }
        return $message;   
    }
    
    public function updateSouvenir(Request $request,$id){
        $nama=$request->input('nama');
        $jumlah=$request->input('jumlah');
        $id_p=$request->input('id_p');
        $id_k=$request->input('id_k');
        
        $souvenir=Souvenir::find($id);
        if($nama!=null){
            $souvenir->nama=$nama;
        }
        if($jumlah!=null){
            $souvenir->nama=$nama;
        }
        if($id_p!=null){
            $souvenir->nama=$nama;
        }
        if($id_k!=null){
            $souvenir->nama=$nama;
        }
        $update=$souvenir->save();
        if($update!=null){
            $message="Data berhasil diubah";
        }else{
            $message="Data gagal diubah";
        }
        return $message;   
    }
    
    public function deleteSouvenir(Request $request,$id){
        $delete=Souvenir::find($id)->delete();
        if($delete!=null){
            $message="Data berhasil dihapus";
        }else{
            $message="Data gagal dihapus";
        }
        return $message;
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
     * @param  \App\Models\Souvenir  $souvenir
     * @return \Illuminate\Http\Response
     */
    public function show(Souvenir $souvenir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Souvenir  $souvenir
     * @return \Illuminate\Http\Response
     */
    public function edit(Souvenir $souvenir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Souvenir  $souvenir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Souvenir $souvenir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Souvenir  $souvenir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Souvenir $souvenir)
    {
        //
    }
}
