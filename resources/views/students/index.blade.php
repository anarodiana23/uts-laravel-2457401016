@extends('layouts.app')

@section('content')
<div class="card shadow border-0 bg-white rounded p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-secondary mb-0">Daftar Siswa</h2>
        <a href="{{ route('students.create') }}" class="btn btn-success shadow-sm">+ Tambah Siswa</a>
    </div>

    <!-- Flash Session Alert -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-primary">
                <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Nilai Rata-rata</th>
                    <th>Status</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($students as $student)
                    <tr>
                        <td>{{ $student->nis }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->classroom }}</td>
                        <td>{{ $student->average_score }}</td>
                        <td>
                            <span class="badge bg-{{ $student->is_active ? 'success' : 'danger' }}">
                                {{ $student->is_active ? 'Aktif' : 'Tidak Aktif' }}
                            </span>
                        </td>
                        <td class="text-center">
                            <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm text-white">Detail</a>
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm text-white">Ubah</a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted py-4">Belum ada data.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
