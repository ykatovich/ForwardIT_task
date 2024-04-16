<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInventoryRequest;
use App\Models\Inventory;

class InventoryController extends Controller
{
    public function index()
    {
        $inventories = Inventory::all();
        return view('inventory.list', compact('inventories'));
    }

    public function create()
    {
        return view('inventory.create');
    }

    public function store(StoreInventoryRequest $request)
    {
        $validatedData = $request->validated();

        Inventory::create($validatedData);

        return redirect()->route('inventory.index');
    }

    public function delete(Inventory $item)
    {
        $item->delete();

        return redirect()->route('inventory.index');
    }
}
