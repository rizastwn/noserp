<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\matauang;
class DataMataUangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matauang = matauang::all();
        return view('master.dataMataUang', compact('matauang',$matauang));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master.buatForm.buatDataMataUang');
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
    		'KodeMataUang' => 'required',
            'NamaMataUang' => 'required',
            'Nilai' => 'required'
    	]);
 
        matauang::create([
            'KodeMataUang' => $request->KodeMataUang,
            'NamaMataUang' => $request->NamaMataUang,
            'Nilai' => $request->Nilai
    	]);
 
    	return redirect('/datamatauang');
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
        $matauang = matauang::find($id);
        return view('master.editForm.editDataMataUang',['matauang' => $matauang]);
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
            'NamaMataUang' => 'required',
            'Nilai' => 'required',
    	]);
      
         $matauang = matauang::find($id);
         $matauang->NamaMataUang = $request->NamaMataUang;
         $matauang->Nilai = $request->Nilai;
         $matauang->save();
         return redirect('/datamatauang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $matauang = matauang::find($id);
        $matauang->delete();
        return redirect('/datamatauang');
    }
}
