<?php

namespace App\Http\Controllers;

use App\Models\Ibukost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IbukostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //Mengambil data dari tabel ibukost
         $ibukost = DB::table('ibukost')->get();

         //mengirim data ibukost ke view index
         return view('/ibukost/ibukkost',['ibukost' => $ibukost]);
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ibukost.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //insert data ibukost
        DB :: table('ibukost')->insert([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);
        return redirect('/ibukost/ibukkost');
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
        $ibukost = DB::table('ibukost')->where('idibukost',$id)->get();
        // passing data pegawai yang didapat ke view kost.edit.blade.php
        return view('ibukost.edit',['ibukost' => $ibukost]);
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
        //update data ibukost
        DB::table('ibukost')->where('idibukost',$request->idibukost)->update([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);
        return redirect('/ibukkost');
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
