<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universidad;

class UniversidadController extends Controller {
    public function index() {
        $universidad = Universidad::orderBy('id', 'DESC')->get();
        return view('welcome', compact('universidad'));
    }
}
