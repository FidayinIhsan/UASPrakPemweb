@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Tambah Inventaris</h1>

<form method="POST" action="{{ route('inventories.store') }}" class="max-w-lg">
    @csrf
    @include('inventories.partials.form', ['submit' => 'Simpan'])
</form>
@endsection
