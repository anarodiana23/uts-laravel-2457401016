@extends('layouts.app')

@section('content')
<div class="row justify-content-center text-center py-5">
    <div class="col-md-8 card shadow p-5 bg-white rounded">
        <h1 class="display-4 fw-bold text-primary mb-3">SchoolApp</h1>
        <p class="lead text-muted mb-4">Sistem pengelolaan data administrasi siswa sekolah yang terintegrasi, cepat, dan aman.</p>
        <div>
            <a href="{{ route('students.index') }}" class="btn btn-primary btn-lg shadow-sm">Lihat Daftar Siswa &rarr;</a>
        </div>
    </div>
</div>
@endsection
