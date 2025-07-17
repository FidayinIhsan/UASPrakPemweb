<div class="mb-4">
    <label class="block mb-1">Nama Barang</label>
    <input type="text" name="nama_barang" value="{{ old('nama_barang', $inventory->nama_barang ?? '') }}" required
           class="w-full border p-2 rounded">
    @error('nama_barang') <small class="text-red-600">{{ $message }}</small> @enderror
</div>

<div class="mb-4">
    <label class="block mb-1">Kode Barang</label>
    <input type="text" name="kode_barang" value="{{ old('kode_barang', $inventory->kode_barang ?? '') }}" required
           class="w-full border p-2 rounded">
    @error('kode_barang') <small class="text-red-600">{{ $message }}</small> @enderror
</div>

<div class="mb-4">
    <label class="block mb-1">Kategori</label>
    <input type="text" name="kategori" value="{{ old('kategori', $inventory->kategori ?? '') }}" required
           class="w-full border p-2 rounded">
    @error('kategori') <small class="text-red-600">{{ $message }}</small> @enderror
</div>

<div class="mb-4">
    <label class="block mb-1">Lokasi</label>
    <input type="text" name="lokasi" value="{{ old('lokasi', $inventory->lokasi ?? '') }}" required
           class="w-full border p-2 rounded">
    @error('lokasi') <small class="text-red-600">{{ $message }}</small> @enderror
</div>

<div class="mb-4">
    <label class="block mb-1">Jumlah</label>
    <input type="number" name="jumlah" value="{{ old('jumlah', $inventory->jumlah ?? 1) }}" required min="1"
           class="w-full border p-2 rounded">
    @error('jumlah') <small class="text-red-600">{{ $message }}</small> @enderror
</div>

<div class="mb-4">
    <label class="block mb-1">Kondisi</label>
    <select name="kondisi" class="w-full border p-2 rounded" required>
        @php $selected = old('kondisi', $inventory->kondisi ?? ''); @endphp
        <option value="baru" {{ $selected == 'baru' ? 'selected' : '' }}>Baru</option>
        <option value="baik" {{ $selected == 'baik' ? 'selected' : '' }}>Baik</option>
        <option value="rusak" {{ $selected == 'rusak' ? 'selected' : '' }}>Rusak</option>
    </select>
    @error('kondisi') <small class="text-red-600">{{ $message }}</small> @enderror
</div>

<div class="mb-4">
    <label class="block mb-1">Catatan</label>
    <textarea name="catatan" rows="3" class="w-full border p-2 rounded">{{ old('catatan', $inventory->catatan ?? '') }}</textarea>
    @error('catatan') <small class="text-red-600">{{ $message }}</small> @enderror
</div>

<button class="bg-blue-600 text-white px-4 py-2 rounded">{{ $submit }}</button>
