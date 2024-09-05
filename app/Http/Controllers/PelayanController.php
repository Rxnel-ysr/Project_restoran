<?php

namespace App\Http\Controllers;

use App\Models\Pelayan;
use Illuminate\Http\Request;
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
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama' => 'required|unique:pelayans,nama,' . $request->id,
            'jenis_kelamin'=>'required'
        ]);

        if($validator->fails()) return redirect()->route('main.pelayans.create')->withInput()->withErrors($validator);

        Pelayan::query()->create($request->all());
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
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(),[
            'nama' => 'required|unique:pelayans,nama,' . $request->id,
            'jenis_kelamin'=>'required'
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        Pelayan::query()->findOrFail($id)->update($request->all());
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
