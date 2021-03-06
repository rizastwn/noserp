<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pemesananpembelian;
use App\lokasi;
use App\matauang;
use App\supplier;
use App\item;
class PemesananPembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pemesananPembelian.pemesananPembelian')
            ->with('matauang', matauang::all())
            ->with('lokasi', lokasi::all())
            ->with('supplier', supplier::all())
            ->with('item', item::all());
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
        $this->validate($request,[
    		'KodePO' => 'required',
            'KodeLokasi' => 'required',
            'KodeMataUang' => 'required',
            // 'KodeSupplier' => 'required',
            'PPN' => 'required',
            'Tanggal' => 'required',
            'Expired' => 'required',
            'Keterangan' => 'required'
    	]);
 
        pemesananpembelian::create([
            'KodePO' => $request->kodepo,
            'KodeLokasi' => $request->lokasi,
            'KodeMataUang' => $request->matauang,
            // 'KodeSupplier' => $request->supplier,
            'PPN' => $request->ppn,
            'Tanggal' => $request->tanggal,
            'Expired' => $request->expired,
            'Keterangan' => $request->keterangan
    	]);
 
    	return redirect('/popembelian');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
