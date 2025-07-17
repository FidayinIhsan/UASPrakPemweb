@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Edit Inventaris</h1>

<form method="POST" action="{{ route('inventories.update', $inventory) }}" class="max-w-lg">
    @csrf
    @method('PUT')
    @include('inventories.partials.form', ['submit' => 'Perbarui'])
</form>
@endsection
