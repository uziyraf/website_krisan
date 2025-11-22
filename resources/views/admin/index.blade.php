@extends('layouts.admin') {{-- Mewarisi struktur dari layouts/admin.blade.php --}}

@section('title', 'Daftar Petani') {{-- Mengisi judul halaman --}}

@section('content') {{-- Mengisi bagian konten utama --}}
    
    <div class="content-header">
        <h1>Daftar Semua Petani</h1>
        <div class="header-actions">
            <a class="btn-tambah" href="{{ route('farmers.create') }}">
                <i class="fas fa-plus"></i> Tambah Petani
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
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Spesialisasi</th>
                    <th>Nomor Telepon</th>
                    <th>Bunga yang Ditanam</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($farmers as $farmer)
                    <tr>
                        <td>{{ $loop->iteration }}</td> 
                        <td><img src="{{ asset('storage/' . $farmer->image) }}" alt="Foto {{ $farmer->name }}"></td>
                        <td>{{ $farmer->name }}</td>
                        <td>{{ $farmer->address }}</td>
                        <td>{{ $farmer->specialization }}</td>
                        <td>{{ $farmer->whatsapp }}</td>
                        <td>
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
                                <button class="hapus-btn" type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus petani ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" style="text-align:center;">Belum ada data petani.</td> 
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection