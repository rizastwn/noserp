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
        $kategoris=kategori::all();
        return view('master.dataKlasifikasi',compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buatForm.buatDataKlasifikasi');
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
            'KodeItemAwal'=> 'required',
            'Status'=> 'required',
            ]);

        $kategoris = new kategori();
        $kategoris->KodeKategori= $request->get('KodeKategori');
        $kategoris->NamaKategori= $request->get('NamaKategori');
        $kategoris->KodeItemAwal= $request->get('KodeItemAwal');
        $kategoris->save();
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
        $kategoris = kategori::find($id);
        return view('editForm.editDataKlasifikasi', compact('kategoris','id'));
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
            'KodeKategori'=> 'required',
            'NamaKategori'=> 'required',
            'KodeItemAwal'=> 'required',
            'Status'=> 'required',
            ]);
        $kategoris= kategori::find($id);
        $kategoris->KodeKategori= $request->get('KodeKategori');
        $kategoris->NamaKategori= $request->get('NamaKategori');
        $kategoris->KodeItemAwal= $request->get('KodeItemAwal');
        $kategoris->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategoris = kategori::find($id);
        $kategoris->delete();
        return redirect('/dataKlasifikasi')->with('success','data klasifikasi telah di hapus');
    }
}
