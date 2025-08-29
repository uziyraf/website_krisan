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
    <title>Daftar Petani</title>
</head>
<body>

    <div class="header-admin">
        <h1>Daftar Semua Petani</h1>
        <div class="header-buttons">
        <a class="btn-tambah" href="{{ route('flowers.create') }}">Tambah Bunga Baru</a>
        <a class="btn-tambah" href="{{ route('farmers.create') }}">Tambah Petani Baru</a>
        </div>
    </div>

    <table class="admin-table">
        <thead>
            <tr>
                <th>No</th> <th>Foto</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Spesialisasi</th>
                <th>Nomor Telepon</th> <th>Bunga yang Ditanam</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($farmers as $farmer)
                <tr>
                    <td>{{ $loop->iteration }}</td> <td><img src="{{ asset('storage/' . $farmer->image) }}" alt="Foto {{ $farmer->name }}"></td>
                    <td>{{ $farmer->name }}</td>
                    <td>{{ $farmer->address }}</td>
                    <td>{{ $farmer->specialization }}</td>
                    <td>{{ $farmer->whatsapp }}</td> <td>
                        <ul>
                        @foreach ($farmer->bunga as $flower)
                            <li>{{ $flower->name }}</li>
                        @endforeach
                        </ul>
                    </td>
                    <td class="action-links">
                        <a href="{{ route('farmers.edit', ['farmer' => $farmer->id]) }}" class="edit-btn">Edit</a>
                        <form action="{{ route('farmers.destroy', $farmer->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="hapus-btn" type-="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus petani ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
            {{-- Update colspan menjadi 8 --}}
                <td colspan="8">Belum ada data petani.</td> 
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>