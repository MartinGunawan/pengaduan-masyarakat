<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tanggapan;

class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanggapan = tanggapan::all();

        return view ('tanggapan.index', compact('tanggapan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tanggapan.create'); 
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
            'id_tanggapan' => 'required',
            'tgl_tanggapan' => 'required',
            'nik' => 'required',
            
        ]);
 
        tanggapan::create([
            'id_tanggapan' => $request->id_tanggapan,
            'tgl_pengaduan' => $request->tgl_tanggapan,
            'nik' => $request->nik,
            
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_tanggapan)
    {
        $tanggapan = tanggapan::where('id_tanggapan', $id_tanggapan)->first();
        return view('tanggapan.edit',compact('tanggapan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_tanggapan){
        $this->validate($request,[
            'id_tanggapan' => 'required',
            'tgl_pengaduan' => 'required',
            'nik' => 'required',
        ]);

         $tanggapan = tanggapan::find($id_tanggapan);
        $tanggapan->tgl_pengaduan = $request->tgl_pengaduan;
        $tanggapan->nik = $request->nik;

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
