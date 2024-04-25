<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use Illuminate\Http\Request;

class AsetController extends Controller
{
    public function index(){
        $aset = Aset::all();
        return view('aset.index',compact(['aset']));
    }
    public function create(){
        return view('aset.create');
    }
    public function store(Request $request){
        Aset::create($request->except(['_token','submit']));
        return redirect('/aset');
    }
    public function edit($IDAset){
        $aset = Aset::find($IDAset);
        return view('aset.edit',(compact(['aset'])));
    }

    public function update($IDAset, Request $request){
        $aset = Aset::find($IDAset);
        $aset->update($request->except(['_token','submit']));
        return redirect('/aset');
    }
    public function destroy($IDAset){
        $aset = Aset::find($IDAset);
        $aset->delete();
        return redirect('/aset');
    }
}