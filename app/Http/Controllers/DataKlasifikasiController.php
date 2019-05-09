<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;
class DataKlasifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = kategori::all();
        return view('master.dataKlasifikasi', compact('kategori',$kategori));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master.buatForm.buatDataKlasifikasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'KodeKategori'=> 'required',
            'NamaKategori'=> 'required',
            'KodeItemAwal'=> 'required'
        ]);
     
        kategori::create([
            'KodeKategori' => $request->KodeKategori,
            'NamaKategori' => $request->NamaKategori,
            'KodeItemAwal' => $request->KodeItemAwal
        ]);
    
        return redirect('/dataklasifikasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = kategori::find($id);
        return view('master.editForm.editDataKlasifikasi',['kategori' => $kategori]);
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
        $this->validate($request,[
            'NamaKategori'=> 'required',
            'KodeItemAwal'=> 'required'
        ]);
        
        $kategori = kategori::find($id);
        $kategori->NamaKategori = $request->NamaKategori;
        $kategori->KodeItemAwal = $request->KodeItemAwal;
        $kategori->save();
        return redirect('/dataklasifikasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = kategori::find($id);
        $kategori->delete();
        return redirect('/dataklasifikasi');
    }
}
