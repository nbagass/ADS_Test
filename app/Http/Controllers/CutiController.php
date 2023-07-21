<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuti;

class CutiController extends Controller
{
    public function index(){
        $cutis=Cuti::all();
        return response()->json($cutis);
    }
}
