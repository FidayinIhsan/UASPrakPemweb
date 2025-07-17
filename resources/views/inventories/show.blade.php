@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Detail Inventaris</h1>
<div class="bg-white shadow rounded p-6">
    <p><strong>Nama:</strong> {{ $inventory->nama_barang }}</p>
    <p><strong>Kode:</strong> {{ $inventory->kode_barang }}</p>
    <p><strong>Kategori:</strong> {{ $inventory->kategori }}</p>
    <p><strong>Lokasi:</strong> {{ $inventory->lokasi }}</p>
    <p><strong>Jumlah:</strong> {{ $inventory->jumlah }}</p>
    <p><strong>Kondisi:</strong> {{ $inventory->kondisi }}</p>
    <p><strong>Catatan:</strong> {{ $inventory->catatan }}</p>
    <a href="{{ route('inventories.index') }}" class="inline-block mt-4 bg-gray-200 px-4 py-2 rounded">Kembali</a>
</div>
@endsection
