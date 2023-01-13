<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnakkostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mengambil data  dari table anakkost
        $anakkost = DB::table('anakkost')->get();

        // Mengirim data anakkost ke view index
        return view('/anakkost/anakkost',['anakkost'=>$anakkost]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anakkost.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //insert data ke table Anakkost

        DB:: table('anakkost')->insert([
            'nama' => $request->nama,
            'gender'=>$request->gender,
            'pekerjaan'=>$request->pekerjaan, 
            'no_telp'=>$request->no_telp, 
            'alamat'=>$request->alamat, 
        ]);
       return  redirect('/anakkost');
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
       $anakkost = DB::table('anakkost')->where('idanakkost',$id)->get();
       // passing data pegawai yang didapat ke view kost.edit.blade.php
       return view('anakkost.edit',['anakkost' => $anakkost]);
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
        // update data anakkost
	DB::table('anakkost')->where('idanakkost',$request->idanakkost)->update([
		'nama' => $request->nama,
		'gender' => $request->gender,
		'pekerjaan' => $request->pekerjaan,
		'no_telp' => $request->no_telp,
		'alamat' => $request->alamat,
	]);
	// alihkan halaman ke halaman anakkost
	return redirect('/anakkost');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // menghapus data anakkost berdasarkan id yang dipilih
	DB::table('anakkost')->where('idanakkost',$id)->delete();
		
	// alihkan halaman ke halaman anakkost
	return redirect('/anakkost');
    }
}
