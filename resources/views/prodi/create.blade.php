@extends('layoutadmin.main')
@section('content')
    <h2>Form Mahasiswa</h2>
    <form method="POST" action="/prodi/store">
        {{ csrf_field() }}
        <div class="mb-3">
            <label class="form-label">KODE PRODI</label>
            <input type="text" name="kode" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">NAMA PRODI</label>
            <input type="text" name="prodi" class="form-control" required>
        </div>
        <a href="/prodi" class="btn btn-secondary">KEMBALI</a>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>
@endsection