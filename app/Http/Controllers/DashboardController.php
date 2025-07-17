<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;


class DashboardController extends Controller
{
  public function index()
    {
        return view('dashboard', [
            'total' => Inventory::count(),
            'perKategori' => Inventory::selectRaw('kategori, COUNT(*) as jumlah')->groupBy('kategori')->get(),
            'perKondisi' => Inventory::selectRaw('kondisi, COUNT(*) as jumlah')->groupBy('kondisi')->get(),
            'terbaru' => Inventory::latest()->first(),
        ]);
    }
}
