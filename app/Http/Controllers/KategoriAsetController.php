<?php

namespace App\Http\Controllers;

use App\Models\KategoriAset;
use Illuminate\Http\Request;

class KategoriAsetController extends Controller
{
    public function index(){
        $kategoriaset = KategoriAset::all();
        return view('kategoriaset.index',compact(['kategoriaset']));
    }
    public function create(){
        return view('kategoriaset.create');
    }
    public function store(Request $request){
        KategoriAset::create($request->except(['_token','submit']));
        return redirect('/kategoriaset');
    }
    public function edit($IDKategori){
        $kategoriaset = KategoriAset::find($IDKategori);
        return view('kategoriaset.edit',(compact(['kategoriaset'])));
    }
    public function update($IDKategori, Request $request){
        $kategoriaset = KategoriAset::find($IDKategori);
        $kategoriaset->update($request->except(['_token','submit']));
        return redirect('/kategoriaset');
    }
    public function destroy($IDKategori){
        $kategoriaset = KategoriAset::find($IDKategori);
        $kategoriaset->delete();
        return redirect('/kategoriaset');
    }
}
