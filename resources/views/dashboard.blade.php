@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto px-4 py-6">
    <h1 class="text-2xl font-semibold text-gray-800 mb-6">📊 Dashboard Inventaris</h1>

    {{-- Ringkasan Data --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white shadow rounded-lg p-4 text-center">
            <div class="text-gray-500 text-sm">Total Barang</div>
            <div class="text-2xl font-bold text-blue-600">{{ $total }}</div>
        </div>

        @foreach($perKategori as $kat)
        <div class="bg-white shadow rounded-lg p-4 text-center">
            <div class="text-gray-500 text-sm">Kategori: {{ $kat->kategori }}</div>
            <div class="text-xl font-semibold text-indigo-500">{{ $kat->jumlah }} item</div>
        </div>
        @endforeach

        @foreach($perKondisi as $kondisi)
        <div class="bg-white shadow rounded-lg p-4 text-center">
            <div class="text-gray-500 text-sm">Kondisi: {{ ucfirst($kondisi->kondisi) }}</div>
            <div class="text-xl font-semibold text-green-500">{{ $kondisi->jumlah }} item</div>
        </div>
        @endforeach
    </div>

    {{-- Barang Terbaru --}}
    <div class="mt-8 bg-white rounded-lg shadow p-6">
        <h2 class="text-lg font-semibold text-gray-700 mb-2">🆕 Barang Terbaru Ditambahkan</h2>
        @if($terbaru)
        <p class="text-gray-600">
            <strong>{{ $terbaru->nama_barang }}</strong> ({{ $terbaru->kategori }}) –
            jumlah: {{ $terbaru->jumlah }}, kondisi: {{ $terbaru->kondisi }}
        </p>
        @else
        <p class="text-gray-500">Belum ada data.</p>
        @endif
    </div>
</div>
<a href="{{ route('inventories.index') }}"
   class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
   Lihat Data Inventaris
</a>
@endsection
