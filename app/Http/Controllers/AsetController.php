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
}