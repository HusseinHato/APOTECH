<?php

namespace App\Http\Controllers;

use App\Models\PesananResep;
use App\Models\Resep;
use App\Models\Cart;
use App\Models\User;
use App\Http\Requests\StorePesananResepRequest;
use App\Http\Requests\UpdatePesananResepRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PesananResepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pesananresep', [
            'pesananresep' => PesananResep::latest()->paginate(4),
            'title' => 'pesanan resep'
        ]);
    }

    public function indexuser()
    {
        $userid = auth()->user()->id;
        $pesananResep = DB::table('pesanan_reseps')->
        join('reseps', 'reseps.id', '=', 'pesanan_reseps.resep_id')->
        select('pesanan_reseps.*', 'reseps.*')->where('reseps.user_id', '=', $userid)->paginate(1);
        $cartItems = \Cart::session($userid)->getContent();
        return view('user.riwayatpembelianresep', [
            'cart' => $cartItems,
            'users' => User::all(),
            'pesananresep' => $pesananResep
        ]);
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
     * @param  \App\Http\Requests\StorePesananResepRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePesananResepRequest $request)
    {
        PesananResep::create([
            'resep_id' => $request['resep_id'],
            'obat_obat' => $request['obat_obat'],
            'total_harga' => $request['total_harga']
        ]);

        return redirect()->back();
    }

    public function updateStatPesananResep(Request $request)
    {
        $transaksi = PesananResep::find($request['id']);
        $transaksi->update(['status' => $request['status']]);
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PesananResep  $pesananResep
     * @return \Illuminate\Http\Response
     */
    public function show(PesananResep $pesananResep)
    {
        return view('admin.detilpesananresep', [
            'pesananresep' => $pesananResep,
            'title' => 'detil pesanan resep'
        ]);

    }

    // public function showuser(Request $pesananResep)
    // {
    //     dd($pesananResep);
    //     $userid = auth()->user()->id;
    //     $cartItems = \Cart::session($userid)->getContent();
    //     return view('user.detilpembelianresep', [
    //         'pesananresep' => $pesananResep,
    //         'cart' => $cartItems,
    //         'users' => User::all()
    //     ]);

    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PesananResep  $pesananResep
     * @return \Illuminate\Http\Response
     */
    public function edit(PesananResep $pesananResep)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePesananResepRequest  $request
     * @param  \App\Models\PesananResep  $pesananResep
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePesananResepRequest $request, PesananResep $pesananResep)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PesananResep  $pesananResep
     * @return \Illuminate\Http\Response
     */
    public function destroy(PesananResep $pesananResep)
    {
        //
    }
}
