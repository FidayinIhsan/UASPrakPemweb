@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl font-bold">Daftar Inventaris TechnoVerse</h1>
    <a href="{{ route('inventories.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Tambah Barang</a>
</div>

<form method="GET" action="{{ route('inventories.index') }}" class="mb-4">
    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari..." class="border rounded p-2 w-full md:w-1/3">
</form>

<div class="bg-white shadow rounded-lg">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kategori</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Lokasi</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Jumlah</th>
                <th class="px-6 py-3">Aksi</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($inventories as $item)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">{{ $item->nama_barang }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $item->kategori }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $item->lokasi }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $item->jumlah }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                    <a href="{{ route('inventories.show', $item) }}" class="text-blue-600 hover:underline">Lihat</a>
                    <a href="{{ route('inventories.edit', $item) }}" class="text-indigo-600 hover:underline">Edit</a>
                    <form action="{{ route('inventories.destroy', $item) }}" method="POST" class="inline-block" onsubmit="return confirm('Hapus item ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600 hover:underline">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="mt-4">
    {{ $inventories->links() }}
</div>
@endsection
