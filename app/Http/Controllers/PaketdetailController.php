<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Paket;
use App\Models\Paketdetail;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class PaketdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Paket $paket)
    {
        $data=Paketdetail::with('barang','paket')->where('paket_id',$paket->id)->get();

        

        return view('paketdetail.index', compact('data','paket'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Paket $paket)
    {
        $barang=Barang::whereNotExists(function ($query) use($paket) {
            $query->select("*")
              ->from('paketdetails')
              ->whereRaw('paketdetails.barang_id = barangs.id'  )
              ->where('paketdetails.paket_id','=',$paket->id);
                } )->get();

        return view('paketdetail.create', compact('paket','barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Paket $paket)
    {
        $data=$request->all();
        return $data;

        foreach ($data['barang_id'] as  $datas)
        {
            Paketdetail::create([
            'paket_id'=>$paket->id,
            'barang_id'=>$datas[0],
            ]);
        }

        return redirect()->route('paket.detail.index',$paket);
    }

    /**
     * Display the specified resource.
     */
    public function show(Paketdetail $paketdetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paketdetail $paketdetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paketdetail $paketdetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paketdetail $detail)
    {
        
        // return $detail;
        $detail->delete();
        
        // return redirect()->route('barang.index');
        return redirect()->route('paket.detail.index', $detail->paket_id);
    }
}
