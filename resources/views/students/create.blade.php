@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 card shadow border-0 bg-white rounded p-4">
        <h2 class="fw-bold text-secondary mb-4">Tambah Data Siswa</h2>

        <form action="{{ route('students.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nis" class="form-label">NIS</label>
                <input type="text" name="nis" id="nis" class="form-label form-control @error('nis') is-invalid @enderror" value="{{ old('nis') }}">
                @error('nis') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="classroom" class="form-label">Kelas (Dropdown)</label>
                <select name="classroom" id="classroom" class="form-select @error('classroom') is-invalid @enderror">
                    <option value="" disabled selected>-- Pilih Kelas --</option>
                    <option value="X IPA 1" {{ old('classroom') == 'X IPA 1' ? 'selected' : '' }}>X IPA 1</option>
                    <option value="X IPS 1" {{ old('classroom') == 'X IPS 1' ? 'selected' : '' }}>X IPS 1</option>
                    <option value="XI IPA 2" {{ old('classroom') == 'XI IPA 2' ? 'selected' : '' }}>XI IPA 2</option>
                </select>
                @error('classroom') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="birth_date" class="form-label">Tanggal Lahir</label>
                <input type="date" name="birth_date" id="birth_date" class="form-control @error('birth_date') is-invalid @enderror" value="{{ old('birth_date') }}">
                @error('birth_date') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="average_score" class="form-label">Nilai Rata-rata</label>
                <input type="number" step="0.01" name="average_score" id="average_score" class="form-control @error('average_score') is-invalid @enderror" value="{{ old('average_score') }}">
                @error('average_score') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <textarea name="address" id="address" rows="3" class="form-control @error('address') is-invalid @enderror">{{ old('address') }}</textarea>
                @error('address') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="parent_phone" class="form-label">No. Telepon Orang Tua</label>
                <input type="text" name="parent_phone" id="parent_phone" class="form-control @error('parent_phone') is-invalid @enderror" value="{{ old('parent_phone') }}">
                @error('parent_phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-4 form-check">
                <input type="hidden" name="is_active" value="0">
                <input type="checkbox" name="is_active" id="is_active" value="1" class="form-check-input" {{ old('is_active', true) ? 'checked' : '' }}>
                <label for="is_active" class="form-check-label">Siswa Aktif (Checkbox)</label>
            </div>

            <div class="d-flex justify-content-end gap-2">
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </div>
        </form>
    </div>
</div>
@endsection
