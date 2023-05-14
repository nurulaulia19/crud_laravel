@extends('layoutadmin.main')
@section('content')
    <h2>Form Mahasiswa</h2>
    <form method="POST" action="/mahasiswa/store">
        {{ csrf_field() }}
        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">NAMA</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">ANGKATAN</label>
            <input type="year" name="angkatan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">PRODI</label>
            <select name="prodi" class="form-control" required>
                <option value="">Pilih</option>
                @foreach ($dataProdi as $item)
                <option value="{{ $item->kd_prodi }}">{{ $item->nama_prodi }}</option>
                @endforeach
            </select>
        </div>
        <a href="/mahasiswa" class="btn btn-secondary">KEMBALI</a>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>
@endsection