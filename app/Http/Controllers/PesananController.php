<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Pesanans = Pesanan::all();
        return view('main.pesanan.index', compact('Pesanans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pesanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pesanan::query()->create($request->all());
        return redirect()->route('Pesanans.index');
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
        $Pesanan = Pesanan::query()->findOrFail($id);
        return view('Pesanan.edit', compact('Pesanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Pesanan::query()->findOrFail($id)->update($request->all());
        return redirect()->route('Pesanans.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pesanan::query()->findOrFail($id)->delete();
        return redirect()->route('Pesanans.index');
    }
}
