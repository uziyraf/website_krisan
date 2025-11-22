@extends('layouts.admin') {{-- Gunakan layout master --}}

@section('title', 'Manajemen Bunga') {{-- Set judul halaman --}}

@section('content')
    <div class="content-header">
        <h1>Manajemen Bunga</h1>
        <div class="header-actions">
            <a class="btn-tambah" href="{{ route('flowers.create') }}">
                <i class="fas fa-plus"></i> Tambah Bunga Baru
            </a>
        </div>
    </div>

    @if(session('success'))
        <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 1rem;">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-container">
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
                            
                            <form action="{{ route('flowers.destroy', $flower->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="hapus-btn" onclick="return confirm('Apakah Anda yakin ingin menghapus bunga ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="text-align: center;">Belum ada data bunga.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection