<?php

namespace App\Http\Controllers;

use App\Models\Tuyen;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $dsTuyen = Tuyen::all();
        return view('home')->with(['dsTuyen' => $dsTuyen]);
    }
}
