<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use App\Models\Minuman;
use App\Models\Snack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    public function storeOfMakanan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'menu' => 'required|unique:makanans,menu,' . $request->id,
            'harga' => 'required|integer|min:5000|max:1000000000'
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        Makanan::query()->create($request->all());
        return redirect()->route('main.menus.makanan.index');
    }

    public function storeOfMinuman(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'menu' => 'required|unique:minumans,menu,' . $request->id,
            'harga' => 'required|integer|min:3000|max:1000000000'
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        Minuman::query()->create($request->all());
        return redirect()->route('main.menus.minuman.index');
    }

    public function storeOfSnack(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'menu' => 'required|unique:snacks,menu,' . $request->id,
            'harga' => 'required|integer|min:1000|max:1000000000'
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        Snack::query()->create($request->all());
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
        $Minumans = Minuman::all();
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
    public function updateOfMakanan(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'menu' => 'required|unique:makanans,menu,' . $request->id,
            'harga' => 'required|integer|min:5000|max:1000000000'
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        Makanan::query()->findOrFail($id)->update($request->all());
        return redirect()->route('main.menus.makanan.index');
    }

    public function updateOfMinuman(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'menu' => 'required|unique:minumans,menu,' . $request->id,
            'harga' => 'required|integer|min:3000|max:1000000000'
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        Makanan::query()->findOrFail($id)->update($request->all());
        return redirect()->route('main.menus.makanan.index');
    }

    public function updateOfSnack(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'menu' => 'required|unique:snacks,menu,' . $request->id,
            'harga' => 'required|integer|min:1000|max:1000000000'
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        Makanan::query()->findOrFail($id)->update($request->all());
        return redirect()->route('main.menus.makanan.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroyOfMakanan(string $id)
    {
        Makanan::query()->findOrFail($id)->delete();
        return redirect()->route('main.menus.makanan.index');
    }
}
