@extends('layouts.main')

@section('title', 'Tambah Mahasiswa')

@section('content')

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h4>Form Tambah Mahasiswa</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('mahasiswa.store') }}" method="POST">
                @csrf

                {{-- NIM --}}
                <div class="mb-3">
                    <label class="form-label">NIM</label>

                    <input type="text"
                        name="nim"
                        class="form-control @error('nim') is-invalid @enderror"
                        placeholder="Masukkan NIM"
                        value="{{ old('nim') }}">

                    @error('nim')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                {{-- Nama --}}
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>

                    <input type="text"
                        name="nama_lengkap"
                        class="form-control @error('nama_lengkap') is-invalid @enderror"
                        placeholder="Masukkan Nama"
                        value="{{ old('nama_lengkap') }}">

                    @error('nama_lengkap')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                {{-- Tempat Lahir --}}
                <div class="mb-3">
                    <label class="form-label">Tempat Lahir</label>

                    <input type="text"
                        name="tempat_lahir"
                        class="form-control @error('tempat_lahir') is-invalid @enderror"
                        placeholder="Masukkan Tempat Lahir"
                        value="{{ old('tempat_lahir') }}">

                    @error('tempat_lahir')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                {{-- Tanggal Lahir --}}
                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>

                    <input type="date"
                        name="tgl"
                        class="form-control @error('tgl') is-invalid @enderror"
                        value="{{ old('tgl') }}">

                    @error('tgl')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="mb-3">
                    <label class="form-label">Email</label>

                    <input type="email"
                        name="email"
                        class="form-control @error('email') is-invalid @enderror"
                        placeholder="Masukkan Email"
                        value="{{ old('email') }}">

                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                {{-- Prodi --}}
                <div class="mb-3">
                    <label class="form-label">Program Studi</label>

                    <select name="prodi"
                        class="form-select @error('prodi') is-invalid @enderror">

                        <option value="">-- Pilih Prodi --</option>

                        <option value="TRPL"
                            {{ old('prodi') == 'TRPL' ? 'selected' : '' }}>
                            TRPL
                        </option>

                        <option value="MI"
                            {{ old('prodi') == 'MI' ? 'selected' : '' }}>
                            MI
                        </option>

                        <option value="TK"
                            {{ old('prodi') == 'TK' ? 'selected' : '' }}>
                            TK
                        </option>

                        <option value="TEKKOM"
                            {{ old('prodi') == 'TEKKOM' ? 'selected' : '' }}>
                            TEKKOM
                        </option>

                    </select>

                    @error('prodi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                {{-- Alamat --}}
                <div class="mb-3">
                    <label class="form-label">Alamat</label>

                    <textarea name="alamat"
                        rows="4"
                        class="form-control @error('alamat') is-invalid @enderror"
                        placeholder="Masukkan Alamat">{{ old('alamat') }}</textarea>

                    @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                {{-- Tombol --}}
                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>

                <a href="{{ route('mahasiswa.index') }}"
                    class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>
    </div>

</div>

@endsection