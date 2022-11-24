<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Mapel;
use App\Models\Pembelajaran;
use Illuminate\Http\Request;

class PembelajaranContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembelajaran = Pembelajaran::all();
        // return $pembelajaran;

        return view('pembelajaran.pembelajaran', compact('pembelajaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = Guru::all();
        $mapel = Mapel::all();
        return view('pembelajaran.tambah', compact('guru', 'mapel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pembelajaran = Pembelajaran::create($request->all());

        return redirect()->route('pembelajaran.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_pembelajaran
     * @return \Illuminate\Http\Response
     */
    public function show($id_pembelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_pembelajaran
     * @return \Illuminate\Http\Response
     */
    public function edit($id_pembelajaran)
    {
        $pembelajaran = Pembelajaran::find($id_pembelajaran);

        return view('pembelajaran.ubah', compact('pembelajaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_pembelajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pembelajaran)
    {
        $pembelajaran = Pembelajaran::find($id_pembelajaran); 
        $pembelajaran->update($request->all());

        return redirect()->route('pembelajaran.index');
    }

    public function delete(Request $request, $id_pembelajaran)
    {
        $pembelajaran = Pembelajaran::find($id_pembelajaran);
        $pembelajaran->delete();

        return redirect()->route('pembelajaran.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_pembelajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pembelajaran)
    {
        //
    }
}
