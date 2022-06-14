<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = DB::table('datamahasiswa')->get();
    	return view('home',['mahasiswa' => $mahasiswa]);
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
        DB::table('datamahasiswa')->insert([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'alamat' => $request->alamat
        ]);
        return redirect('/');
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
        $mahasiswa = DB::table('datamahasiswa')->where('id',$id)->get();
	    return view('edit',['mahasiswa' => $mahasiswa]);
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
        DB::table('datamahasiswa')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('datamahasiswa')->where('id',$id)->delete();
	    return redirect('/');
    }
    public function input()
    {
        return view('input');
    }
    public function about()
    {
        return view('about');
    }
}
