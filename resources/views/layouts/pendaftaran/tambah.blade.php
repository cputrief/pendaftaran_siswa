@extends('layouts.template')

@section('name-nav')
    <p>Tambah Data Siswa</p>
@endsection

@section('conten')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-header">
            <h4 class="card-title">Form Tambah Data Siswa</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('siswa.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nisn" class="form-label">NISN</label>
                    <input type="text" class="form-control" id="nisn" name="nisn" required>
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>

                <div class="mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" required>
                </div>

                <div class="mb-3">
                    <label for="jk" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="jk" name="jk" required>
                        <option value="">-- Pilih --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status" required>
                        <option value="">-- Pilih --</option>
                        <option value="Siswa">Siswa</option>
                        <option value="Alumni">Alumni</option>
                    </select>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">
                        <i class="nc-icon nc-simple-add"></i> Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
