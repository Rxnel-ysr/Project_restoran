<?php

namespace App\Http\Controllers;

use App\Models\Koki;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KokiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Kokis = Koki::all();
        return view('main.koki.index', compact('Kokis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('main.koki.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama' => 'required|unique:kokis,nama,' . $request->id,
            'divisi'=>'required'
        ]);

        if($validator->fails()) return redirect()->route('main.kokis.create')->withInput()->withErrors($validator);

        Koki::query()->create($request->all());
        return redirect()->route('main.kokis.index');
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
        $Koki = Koki::query()->findOrFail($id);
        return view('main.koki.edit', compact('Koki'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $validator = Validator::make($request->all(),[
            'nama' => 'required|unique:kokis,nama,' . $request->id,
            'divisi'=>'required'
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        Koki::query()->findOrFail($id)->update($request->all());
        return redirect()->route('main.kokis.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Koki::query()->findOrFail($id)->delete();
        return redirect()->route('main.kokis.index');
    }
}
