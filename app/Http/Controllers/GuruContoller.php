<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Guru::all();

        return view('guru.guru', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guru = Guru::create($request->all());

        return redirect()->route('guru.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_guru
     * @return \Illuminate\Http\Response
     */
    public function show($id_guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_guru
     * @return \Illuminate\Http\Response
     */
    public function edit($id_guru)
    {
        $guru = Guru::find($id_guru);

        return view('guru.ubah', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_guru)
    {
        $guru = Guru::find($id_guru); 
        $guru->update($request->all());

        return redirect()->route('guru.index');
    }

    public function delete(Request $request, $id_guru)
    {
        $guru = Guru::find($id_guru);
        $guru->delete();

        return redirect()->route('guru.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_guru
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_guru)
    {
        //
    }
}
