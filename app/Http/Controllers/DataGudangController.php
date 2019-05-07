<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lokasi;
use Illuminate\Support\Facades\DB;
class DataGudangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lokasi = lokasi::all();
        return view('master.dataGudang', compact('lokasi',$lokasi));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master.buatForm.buatDataGudang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('lokasis')->insert([
            'KodeLokasi' => $request->KodeLokasi,
            'NamaLokasi' => $request->NamaLokasi,
            'Tipe' => $request->Tipe
        ]);
        return redirect('/datagudang');

        // $this->validate($request,[
    	// 	'KodeLokasi' => 'required',
        //     'NamaLokasi' => 'required',
        //     'Tipe' => 'required',
    	// ]);
 
        // lokasi::create([
        //     'KodeLokasi' => $request->KodeLokasi,
        //     'NamaLokasi' => $request->NamaLokasi,
        //     'Tipe' => $request->Tipe
    	// ]);
 
    	// return redirect('/datagudang');
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
        $lokasi = DB::table('lokasis')->where('KodeLokasi',$id)->get();
        return view('master.editForm.editDataGudang',['lokasi' => $lokasi]);

        // $lokasi = lokasi::find($id);
        // return view('master.editForm.editDataGudang',['lokasi' => $lokasi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('lokasis')->where('KodeLokasi',$request->KodeLokasi)->update([
            'NamaLokasi' => $request->NamaLokasi,
            'Tipe' => $request->Tipe
        ]);
        return redirect('/datagudang');

        // $this->validate($request,[
        //     'NamaLokasi' => 'required',
        //     'Tipe' => 'required',
    	// ]);
      
        //  $lokasi = lokasi::find($id);
        //  $lokasi->NamaLokasi = $request->NamaLokasi;
        //  $lokasi->Tipe = $request->Tipe;
        //  $lokasi->save();
        //  return redirect('/datagudang');
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
