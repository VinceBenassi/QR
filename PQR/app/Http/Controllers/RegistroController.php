<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class RegistroController extends Controller {
    public function index() {
        return view('qr');
    }
}
