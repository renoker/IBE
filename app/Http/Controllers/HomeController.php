<?php

namespace App\Http\Controllers;

use App\Models\Directory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maquinas = Directory::limit(3)->get();
        return view('pages.home', [
            'list'  => $maquinas
        ]);
    }
}
