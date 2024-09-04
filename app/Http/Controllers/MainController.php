<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('main.index');
    }

    public function indexOfKokis()
    {
        return view('main.koki.index');
    }
}