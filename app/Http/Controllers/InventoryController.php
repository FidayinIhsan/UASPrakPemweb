<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $inventories = Inventory::when($request->search, function ($query, $search) {
            return $query->where('nama_barang', 'like', "%{$search}%")
                         ->orWhere('kategori', 'like', "%{$search}%")
                         ->orWhere('lokasi', 'like', "%{$search}%");
        })->latest()->paginate(10)->withQueryString();

        return view('inventories.index', compact('inventories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_barang' => 'required|string|max:100',
            'kode_barang' => 'required|string|max:50|unique:inventories,kode_barang',
            'kategori' => 'required|string|max:50',
            'lokasi' => 'required|string|max:50',
            'jumlah' => 'required|integer|min:1',
            'kondisi' => 'required|in:baru,baik,rusak',
            'catatan' => 'nullable|string',
        ]);

        Inventory::create($validated);

        return redirect()->route('inventories.index')->with('success', 'Inventaris berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventory $inventory)
    {
        return view('inventories.show', compact('inventory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventory $inventory)
    {
        return view('inventories.edit', compact('inventory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inventory $inventory)
    {
        $validated = $request->validate([
            'nama_barang' => 'required|string|max:100',
            'kode_barang' => 'required|string|max:50|unique:inventories,kode_barang,' . $inventory->id,
            'kategori' => 'required|string|max:50',
            'lokasi' => 'required|string|max:50',
            'jumlah' => 'required|integer|min:1',
            'kondisi' => 'required|in:baru,baik,rusak',
            'catatan' => 'nullable|string',
        ]);

        $inventory->update($validated);

        return redirect()->route('inventories.index')->with('success', 'Inventaris berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventory $inventory)
    {
        $inventory->delete();

        return redirect()->route('inventories.index')->with('success', 'Inventaris berhasil dihapus.');
    }
}
