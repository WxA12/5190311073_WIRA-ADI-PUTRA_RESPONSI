<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Anakkost;
use App\Models\Ibukost;



class KostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Mengambil data dari tabel kost
        $kost = DB::table('kost')->get();

        //mengirim data kost ke view index
        return view('/kost/kost',['kost' => $kost]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ibukost = DB::table('ibukost')->get();
        $anakkost = DB::table('anakkost')->get();
        return view('kost.create',['ibukost' => $ibukost,'anakkost'=>$anakkost
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Insert table
        DB :: table('kost')->insert([
            'name_kost' => $request->name_kost,
            'nokamar_kost' => $request->nokamar_kost,
            'alamat' => $request->alamat,
            'id_ibukost' => $request->id_ibukost,
            'id_anakkost' => $request->id_anakkost,
        ]);
        return redirect('/kost');
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
        // mengambil data pegawai berdasarkan id yang dipilih
        $kost = DB::table('kost')->where('idkost',$id)->get();
        // passing data pegawai yang didapat ke view kost.edit.blade.php
        return view('kost.edit',['kost' => $kost]);
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
        //update data kost
        DB::table('kost')->where('idkost',$request->idkost)->update([
            'name_kost' => $request->name_kost,
            'nokamar_kost' => $request->nokamar_kost,
            'alamat' => $request->alamat,
            'id_ibukost' => $request->id_ibukost,
            'id_anakkost' => $request->id_anakkost,
        ]);
        // alihkan halaman ke halaman kost
        return redirect('/kost');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
	DB::table('kost')->where('idkost',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/kost');
    }
}
