<?php

namespace App\Http\Controllers;

use App\Models\LokasiAset;
use Illuminate\Http\Request;

class LokasiAsetController extends Controller
{
    public function index(){
        $lokasiaset = LokasiAset::all();
        return view('lokasiaset.index',compact(['lokasiaset']));
    }
    public function create(){
        return view('lokasiaset.create');
    }
    public function store(Request $request){
        LokasiAset::create($request->except(['_token','submit']));
        return redirect('/lokasiaset');
    }
    public function edit($IDLokasi){
        $lokasiaset = LokasiAset::find($IDLokasi);
        return view('lokasiaset.edit',(compact(['lokasiaset'])));
    }
    public function update($IDLokasi, Request $request){
        $lokasiaset = LokasiAset::find($IDLokasi);
        $lokasiaset->update($request->except(['_token','submit']));
        return redirect('/lokasiaset');
    }
    public function destroy($IDLokasi){
        $lokasiaset = LokasiAset::find($IDLokasi);
        $lokasiaset->delete();
        return redirect('/lokasiaset');
    }
}
