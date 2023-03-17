<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\table_heros;
class Table_HerosController extends Controller
{

    public function index () {
    $page_title = "Super heros View";

    $Table_Heros = table_heros::all();

    return view('superheros', compact('page_title', 'Table_Heros'));
}

public function index_wom () {
    $page_title = "Super heros women View";

    $women = table_heros::where('gender', '=', 'Female')->get();

    return view('superherosw', compact('page_title', 'women'));
}

public function index_men () {
    $page_title = "Super heros men View";

    $men = table_heros::where('gender', '=', 'Male')->get();

    return view('superherosm', compact('page_title', 'men'));
}

}
