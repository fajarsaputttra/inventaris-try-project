<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use App\Models\LokasiAset;
use App\Models\KategoriAset;
use Illuminate\Http\Request;

class AsetController extends Controller
{
    public function index(){
        $aset = Aset::all();
        $laset = LokasiAset::with('aset')->get();
        $kaset = KategoriAset::with('aset')->get();
        return view('aset.index',compact(['aset', 'laset', 'kaset']));
    }
    public function create(){
        $laset = LokasiAset::all();
        $kaset = KategoriAset::all();
        return view('aset.create', compact('laset', 'kaset'));
    }
    public function store(Request $request){
        Aset::create($request->except(['_token','submit']));
        return redirect('/aset');
    }

    public function edit($IDAset){
        $aset = Aset::find($IDAset);
    
        if($aset) {
            $laset = LokasiAset::all();
            $kaset = KategoriAset::all();
            return view('aset.edit', compact('aset', 'laset', 'kaset'));
        } else {
            return redirect('/aset')->with('error', 'Data Aset tidak ditemukan');
        }
    }
    
    public function update($IDAset, Request $request){
        $aset = Aset::find($IDAset);
        $aset->update($request->except(['_token','submit']));
        return redirect('/aset');
    }
    public function destroy($IDAset){
        $aset = Aset::findOrFail($IDAset);
        $aset->delete();
        return redirect('/aset');
    }
}