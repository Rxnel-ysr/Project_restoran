<?php

namespace App\Http\Controllers;

use App\Http\Requests\PelayanRequest;
use App\Models\Pelayan;
use Illuminate\Support\Facades\Validator;

class PelayanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Pelayans = Pelayan::all();
        return view('main.pelayan.index', compact('Pelayans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('main.pelayan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PelayanRequest $request)
    {
        
        Pelayan::query()->create($request->validated());
        return redirect()->route('main.pelayans.index');
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
        $Pelayan = Pelayan::query()->findOrFail($id);
        return view('main.pelayan.edit', compact('Pelayan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PelayanRequest $request, string $id)
    {
        
        Pelayan::query()->findOrFail($id)->update($request->validated());
        return redirect()->route('main.pelayans.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pelayan::query()->findOrFail($id)->delete();
        return redirect()->route('main.pelayans.index');
    }
}
