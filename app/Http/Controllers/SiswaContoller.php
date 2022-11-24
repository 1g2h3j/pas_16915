<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();

        return view('siswa.siswa', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = Siswa::create($request->all());

        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_siswa
     * @return \Illuminate\Http\Response
     */
    public function show($id_siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id_siswa)
    {
        $siswa = Siswa::find($id_siswa);

        return view('siswa.ubah', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_siswa)
    {
        $siswa = Siswa::find($id_siswa); 
        $siswa->update($request->all());

        return redirect()->route('siswa.index');
    }

    public function delete(Request $request, $id_siswa)
    {
        $siswa = Siswa::find($id_siswa);
        $siswa->delete();

        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_siswa)
    {
        //
    }
}
