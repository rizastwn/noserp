<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\satuan;
class DataSatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $satuan = satuan::all();
        return view('master.dataSatuan', compact('satuan',$satuan));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master.buatForm.buatDataSatuan');
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
            'KodeSatuan'=> 'required',
            'NamaSatuan'=> 'required'
        ]);
     
        satuan::create([
            'KodeSatuan' => $request->KodeSatuan,
            'NamaSatuan' => $request->NamaSatuan
        ]);
    
        return redirect('/datasatuan');
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
        $satuan = satuan::find($id);
        return view('master.editForm.editDataSatuan',['satuan' => $satuan]);
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
            'NamaSatuan'=> 'required'
        ]);
        
        $satuan = satuan::find($id);
        $satuan->NamaSatuan = $request->NamaSatuan;
        $satuan->save();
        return redirect('/datasatuan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $satuan = satuan::find($id);
        $satuan->delete();
        return redirect('/datasatuan');
    }
}


