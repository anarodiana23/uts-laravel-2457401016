@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 card shadow border-0 bg-white rounded p-4">
        <h2 class="fw-bold text-secondary mb-4">Detail Informasi Siswa</h2>
        
        <table class="table table-bordered">
            <tr>
                <th width="30%" class="bg-light">NIS</th>
                <td>{{ $student->nis }}</td>
            </tr>
            <tr>
                <th class="bg-light">Nama Lengkap</th>
                <td>{{ $student->name }}</td>
            </tr>
            <tr>
                <th class="bg-light">Kelas</th>
                <td>{{ $student->classroom }}</td>
            </tr>
            <tr>
                <th class="bg-light">Tanggal Lahir</th>
                <td>{{ \Carbon\Carbon::parse($student->birth_date)->format('d F Y') }}</td>
            </tr>
            <tr>
                <th class="bg-light">Nilai Rata-rata</th>
                <td>{{ $student->average_score }}</td>
            </tr>
            <tr>
                <th class="bg-light">Alamat</th>
                <td>{{ $student->address ?? '-' }}</td>
            </tr>
            <tr>
                <th class="bg-light">No. Telepon Orang Tua</th>
                <td>{{ $student->parent_phone ?? '-' }}</td>
            </tr>
            <tr>
                <th class="bg-light">Status Keaktifan</th>
                <td>
                    <span class="badge bg-{{ $student->is_active ? 'success' : 'danger' }}">
                        {{ $student->is_active ? 'Aktif' : 'Tidak Aktif' }}
                    </span>
                </td>
            </tr>
        </table>

        <div class="d-flex justify-content-end mt-4">
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Kembali ke Daftar</a>
        </div>
    </div>
</div>
@endsection
