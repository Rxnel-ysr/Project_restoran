<?php

namespace App\Http\Controllers;

use App\Http\Requests\MakananRequest;
use App\Http\Requests\MinumanRequest;
use App\Http\Requests\SnackRequest;
use App\Models\Makanan;
use App\Models\Minuman;
use App\Models\Snack;
class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $Makanans = Makanan::all();
        $Minumans = Minuman::all();
        $Snacks = Snack::all();
        return view('main.menu.index', compact('Makanans', 'Minumans', 'Snacks'));
    }

    public function indexOfMakanan()
    {
        $Makanans = Makanan::all();
        return view('main.menu.makanan.index', compact('Makanans'));
    }

    public function indexOfMinuman()
    {
        $Minumans = Minuman::all();
        return view('main.menu.minuman.index', compact('Minumans'));
    }

    public function indexOfSnack()
    {
        $Snacks = Snack::all();
        return view('main.menu.snack.index', compact('Snacks'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function createOfMakanan()
    {
        return view('main.menu.makanan.create');
    }

    public function createOfMinuman()
    {
        return view('main.menu.minuman.create');
    }

    public function createOfSnack()
    {
        return view('main.menu.snack.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeOfMakanan(MakananRequest $request)
    {
        Makanan::query()->create($request->validated());
        return redirect()->route('main.menus.makanan.index');
    }

    public function storeOfMinuman(MinumanRequest $request)
    {
       
        Minuman::query()->create($request->validated());
        return redirect()->route('main.menus.minuman.index');
    }

    public function storeOfSnack(SnackRequest $request)
    {
       
        Snack::query()->create($request->validated());
        return redirect()->route('main.menus.snack.index');
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
    public function editOfMakanan(string $id)
    {
        $Makanans = Makanan::query()->findOrFail($id);
        return view('main.menu.makanan.edit', compact('Makanans'));
    }

    public function editOfMinuman(string $id)
    {
        $Minumans = Minuman::query()->findOrFail($id);
        return view('main.menu.minuman.edit', compact('Minumans'));
    } 

    public function editOfSnack(string $id)
    {
        $Snacks = Snack::query()->findOrFail($id);
        return view('main.menu.snack.edit', compact('Snacks'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function updateOfMakanan(MakananRequest $request, string $id)
    {
       
        Makanan::query()->findOrFail($id)->update($request->validated());
        return redirect()->route('main.menus.makanan.index');
    }

    public function updateOfMinuman(MinumanRequest $request, string $id)
    {
        
        Minuman::query()->findOrFail($id)->update($request->validated());
        return redirect()->route('main.menus.minuman.index');
    }

    public function updateOfSnack(SnackRequest $request, string $id)
    {
        
        Snack::query()->findOrFail($id)->update($request->validated());
        return redirect()->route('main.menus.snack.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroyOfMakanan(string $id)
    {
        Makanan::query()->findOrFail($id)->delete();
        return redirect()->route('main.menus.makanan.index');
    }

    public function destroyOfMinuman(string $id)
    {
        Minuman::query()->findOrFail($id)->delete();
        return redirect()->route('main.menus.minuman.index');
    }

    public function destroyOfSnack(string $id)
    {
        Snack::query()->findOrFail($id)->delete();
        return redirect()->route('main.menus.snack.index');
    }
}
