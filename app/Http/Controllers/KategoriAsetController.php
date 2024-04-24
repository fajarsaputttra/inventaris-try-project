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
}
