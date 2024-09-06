<?php

namespace App\Http\Controllers;

use App\Http\Requests\KokiRequest;
use App\Models\Koki;
use Illuminate\Http\Request;
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
    public function store(KokiRequest $request)
    {

        Koki::query()->create($request->validated());
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
    public function update(KokiRequest $request, string $id)
    {
        Koki::query()->findOrFail($id)->update($request->validated());
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
