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
}
