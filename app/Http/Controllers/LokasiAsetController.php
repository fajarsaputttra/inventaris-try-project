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
}
