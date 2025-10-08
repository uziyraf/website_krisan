<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Manajemen Bunga</title>
</head>
<body>
    <div class="container">
        <div class="header-admin">
            <h1>Manajemen Bunga</h1>
            <a href="{{ route('flowers.create') }}" class="btn-tambah">Tambah Bunga Baru</a>
            <div>
              <a class="btn-tambah" href="{{ route('flowers.index') }}">Data Bunga</a> {{-- <-- Tambah Link Ini --}}
              <a class="btn-tambah" href="{{ route('farmers.index') }}">Data Petani </a>
            </div>
        </div>

        @if(session('success'))
            <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 1rem;">
                {{ session('success') }}
            </div>
        @endif

        <table class="admin-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($flowers as $flower)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ asset('storage/' . $flower->image) }}" alt="Foto {{ $flower->name }}"></td>
                        <td>{{ $flower->name }}</td>
                        <td>{{ Str::words($flower->description, 10, '...') }}</td>
                        <td class="action-links">
                            <a href="{{ route('flowers.edit', $flower->id) }}" class="edit-btn">Edit</a>
                            <form action="#" method="POST" style="display:inline;">
                                @csrf
                            </form>
                            <form action="{{ route('flowers.destroy', $flower->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="hapus-btn" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                        </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Belum ada data bunga.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>