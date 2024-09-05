<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use App\Models\Minuman;
use App\Models\Snack;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        return view('main.menu.index');
    }

    public function indexOfMakanan()
    {
        $Makanan = Makanan::all();
        return view('main.menu.makanan.index', compact('Makanan'));
    }

    public function indexOfMinuman()
    {
        $Minuman = Minuman::all();
        return view('main.menu.minuman.index', compact('Minuman'));
    }

    public function indexOfSnack()
    {
        $Snack = Snack::all(); 
        return view('main.menu.snack.index', compact('Snack'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createOfMakanan()
    {
        return view('main.menu.makanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
