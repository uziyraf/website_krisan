<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Petani</title>
    <style>
        body { font-family: sans-serif; margin: 2rem; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        img { max-width: 50px; border-radius: 5px; }
        .action-links a { margin-right: 10px; }
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem; }
        .header a { background-color: #28a745; color: white; padding: 0.5rem 1rem; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>

    <div class="header">
        <h1>Daftar Semua Petani</h1>
        <a href="{{ route('farmers.create') }}">Tambah Petani Baru</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Foto</th>
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
                    <td><img src="{{ asset('storage/' . $farmer->image) }}" alt="Foto {{ $farmer->name }}"></td>
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
                        <a href="{{ route('farmers.edit', ['farmer' => $farmer->id]) }}">Edit</a>
                        <form action="{{ route('farmers.destroy', $farmer->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type-="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus petani ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Belum ada data petani.</td> </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>