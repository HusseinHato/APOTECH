<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use Illuminate\Http\Request;

class KeluhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreKeluhanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => ['required'],
            'slug' => ['required']
        ]);

        Keluhan::create($validated);
        return redirect('/tabelkeluhan')->with('alert', 'Keluhan baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keluhan  $keluhan
     * @return \Illuminate\Http\Response
     */
    public function show(Keluhan $keluhan)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keluhan  $keluhan
     * @return \Illuminate\Http\Response
     */
    public function edit(Keluhan $keluhan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Keluhan  $keluhan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $keluhan = Keluhan::find($id);
        $keluhan->nama = $request->input('nama');
        $keluhan->update();

        return redirect('/tabelkeluhan')->with('status', 'Nama keluhan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keluhan  $keluhan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $keluhan = Keluhan::find($id);
        $keluhan->delete();

        return redirect('/tabelkeluhan')->with('isDelete', 'Keluhan berhasil dihapus');
    }
}
