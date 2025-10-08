<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Tambah Jenis Bunga Baru</title>
    {{-- Anda bisa menggunakan style yang sama dari form petani --}}
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

    <h1>Form Tambah Jenis Bunga Baru</h1>

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

   <form action="{{ isset($flower) ? route('flowers.update', $flower->id) : route('flowers.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($flower))
        @method('PUT')
    @endif

    <div class="form-group">
        <label for="name">Nama Bunga</label>
        <input type="text" name="name" id="name" value="{{ old('name', $flower->name ?? '') }}" required>
    </div>
    <div class="form-group">
        <label for="description">Deskripsi</label>
        <textarea name="description" id="description" required>{{ old('description', $flower->description ?? '') }}</textarea>
    </div>
    <div class="form-group">
        <label for="image">Gambar</label>
        <input type="file" name="image" id="image" {{ isset($flower) ? '' : 'required' }}>
        @if(isset($flower) && $flower->image)
            <img src="{{ asset('storage/' . $flower->image) }}" alt="Gambar bunga" style="max-width:120px; margin-top:10px;">
        @endif
    </div>
    <button type="submit" class="btn">
        {{ isset($flower) ? 'Update' : 'Tambah' }}
    </button>
    </form>

</body>
</html>