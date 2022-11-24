<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapel = Mapel::all();

        return view('mapel.mapel', compact('mapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mapel.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mapel = Mapel::create($request->all());

        return redirect()->route('mapel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_mapel
     * @return \Illuminate\Http\Response
     */
    public function show($id_mapel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_mapel
     * @return \Illuminate\Http\Response
     */
    public function edit($id_mapel)
    {
        $mapel = Mapel::find($id_mapel);

        return view('mapel.ubah', compact('mapel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_mapel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_mapel)
    {
        $mapel = Mapel::find($id_mapel); 
        $mapel->update($request->all());

        return redirect()->route('mapel.index');
    }

    public function delete(Request $request, $id_mapel)
    {
        $mapel = Mapel::find($id_mapel);
        $mapel->delete();

        return redirect()->route('mapel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_mapel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_mapel)
    {
        //
    }
}
