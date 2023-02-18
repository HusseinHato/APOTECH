<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()) {
            $userid = Auth::user()->id;
            $cartItems = \Cart::session($userid)->getContent();
            return view('user.produk',[
                'cart' => $cartItems,
                "obats" => Obat::latest()->filter(request(['search']))->paginate(12)->withQueryString()
            ]);
        }
        else{
            return view('user.produk', [
                "obats" => Obat::latest()->filter(request(['search']))->paginate(12)->withQueryString()
            ]);
        }
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
     * @param  \App\Http\Requests\StoreObatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => ['required'],
            'category_id' => ['required'],
            'slug' => ['required'],
            'harga' => ['required'],
            'stok' => ['required'],
            'image' => ['image','file']
        ]);

        if ($request->file('image')) {
            $validated['image'] = $request->file('image')->store('obats');
        }

        Obat::create($validated);

        $obatt = Obat::latest('id')->first();

        foreach ($request->input('keluhans') as $keluhan) {
            $obatt->keluhans()->attach($keluhan);
        }

        return redirect('/tabelobat')->with('alert', 'Obat baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function show(Obat $obat)
    {
        if (Auth::user()) {
            $userid = Auth::user()->id;
            $cartItems = \Cart::session($userid)->getContent();
            return view('user.detailproduk',[
                "title" => "Detail Produk",
                "cart" => $cartItems,
                "obat" => $obat

            ]);
        }
        else{
            return view('user.detailproduk', [
                "title" => "Detail Produk",
                "obat" => $obat
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $obat = Obat::find($id);
        $obat->nama = $request->input('nama');
        $obat->stok = $request->input('stok');
        $obat->update();

        return redirect('/tabelobat')->with('status', 'Data obat berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $obat = Obat::find($id);
        $obat->delete();

        return redirect('/tabelobat')->with('isDelete', 'Obat berhasil dihapus');
    }


}
