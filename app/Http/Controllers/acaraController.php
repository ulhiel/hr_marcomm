<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Prioritas;
use \App\Acara;
use App\Http\Requests\AcaraRequest;
use Carbon\Carbon;

class acaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     

        
        $acaras = \App\Acara::all();
        $prioritas = \App\Prioritas::all();

        return view('acara.index',compact('prioritas','acaras')); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AcaraRequest $request)
    {
        
        Acara::create([
            'acara_nama' => $request->acara_nama,
            'prioritas_id' => $request->prioritas_id,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'tempat_acara' => $request->tempat_acara,
            'jumlah_personil' => $request->jumlah_personil
        ]);

        return redirect('/acara')->with('tambah_acara','Acara baru berhasil ditambahkan');

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
