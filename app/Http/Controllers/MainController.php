<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('main.index');
    }
    
}