<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInventoryRequest;
use App\Models\Inventory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class InventoryController extends Controller
{
    public function index(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $inventories = Inventory::all();
        return view('inventory.list', compact('inventories'));
    }

    public function create(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('inventory.create');
    }

    public function store(StoreInventoryRequest $request): RedirectResponse
    {
        $validatedData = $request->validated();

        Inventory::create($validatedData);

        return redirect()->route('inventory.index');
    }

    public function delete(Inventory $item): RedirectResponse
    {
        $item->delete();

        return redirect()->route('inventory.index');
    }
}
