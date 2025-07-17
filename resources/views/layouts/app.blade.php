<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Catatan Inventaris Organisasi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 flex min-h-screen">

    {{-- Sidebar --}}
    <aside class="w-64 bg-white shadow-md px-4 py-6 hidden md:block">
        <h2 class="text-xl font-bold text-blue-700 mb-6">📁 Inventaris</h2>

        <nav class="space-y-3">
            <a href="{{ route('dashboard') }}"
               class="block px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded hover:bg-blue-700">
               Dashboard
            </a>
            <a href="{{ route('inventories.index') }}"
               class="block px-4 py-2 text-sm font-medium text-gray-700 rounded hover:bg-gray-200">
               Inventaris
            </a>
            <a href="{{ route('inventories.create') }}"
               class="block px-4 py-2 text-sm font-medium text-green-700 bg-green-100 rounded hover:bg-green-200">
               + Tambah Barang
            </a>
        </nav>
    </aside>

    {{-- Main Content --}}
    <main class="flex-1 px-6 py-6">
        @yield('content')
    </main>

</body>
</html>
