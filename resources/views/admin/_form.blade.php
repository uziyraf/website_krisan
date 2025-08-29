<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Tambah Petani Baru</title>
    <style>
        body { font-family: sans-serif; margin: 2rem; }
        .form-group { margin-bottom: 1rem; }
        label { display: block; margin-bottom: 0.5rem; }
        input, textarea { width: 300px; padding: 0.5rem; }
        .alert { padding: 1rem; margin-bottom: 1rem; border-radius: 5px; }
        .alert-success { background-color: #d4edda; color: #155724; }
        .alert-danger { background-color: #f8d7da; color: #721c24; }
    </style>
</head>
<body>

    <h1>Form Tambah Petani Baru</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ isset($farmer) ? route('farmers.update', $farmer->id) : route('farmers.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($farmer))
        @method('PUT')
    @endif

    <div class="form-group">
        <label for="name">Nama Petani</label>
        {{-- Jika $farmer ada, tampilkan namanya. Jika tidak, tampilkan nilai lama atau string kosong --}}
        <input type="text" id="name" name="name" value="{{ old('name', $farmer->name ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="address">Alamat</label>
        <input type="text" id="address" name="address" value="{{ old('address', $farmer->address ?? '') }}" required>
    </div>

    <div class="form-group">
    <label for="mapLink">Link Google Maps</label>
    <input type="url" id="mapLink" name="mapLink" value="{{ old('mapLink', $farmer->mapLink ?? '') }}">
    </div>

    <div class="form-group">
        <label for="specialization">Spesialisasi</label>
        <input type="text" id="specialization" name="specialization" value="{{ old('specialization', $farmer->specialization ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="description">Deskripsi Singkat</label>
        <textarea id="description" name="description" required>{{ old('description', $farmer->description ?? '') }}</textarea>
    </div>

    <div class="form-group">
        <label for="story">Cerita</label>
        <textarea id="story" name="story" required>{{ old('story', $farmer->story ?? '') }}</textarea>
    </div>

     <div class="form-group">
        <label for="whatsapp">Nomor WhatsApp</label>
        <input type="text" id="whatsapp" name="whatsapp" value="{{ old('whatsapp', $farmer->whatsapp ?? '') }}" required>
    </div>

    <div class="form-group">
        <h4>Pilih Bunga yang Ditanam Petani Ini</h4>
        <select name="flowers[]" id="flowers-select" multiple="multiple" style="width: 315px;">
            @foreach ($flowers as $flower)
                <option value="{{ $flower->id }}"
                    {{-- Jika mode edit & petani ini menanam bunga ini, pilih opsi ini --}}
                    {{ (isset($farmer) && $farmer->bunga->contains($flower->id)) ? 'selected' : '' }}>
                    {{ $flower->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="image">Foto Petani {{ isset($farmer) ? '(Kosongkan jika tidak ingin diubah)' : '' }}</label>
        <input type="file" id="image" name="image" {{ isset($farmer) ? '' : 'required' }}>
        @if(isset($farmer))
            <p>Foto saat ini:</p>
            <img src="{{ asset('storage/' . $farmer->image) }}" alt="Foto {{ $farmer->name }}" width="100">
        @endif
    </div>

    {{-- Teks tombol akan berubah tergantung mode --}}
    <button  class="edit-btn" type="submit">{{ isset($farmer) ? 'Update Petani' : 'Simpan Petani' }}</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        // Terapkan Select2 pada elemen dengan ID 'flowers-select'
        $('#flowers-select').select2({
            placeholder: "Cari dan pilih bunga...",
            allowClear: true
        });
    });
</script>
</body>
</html>