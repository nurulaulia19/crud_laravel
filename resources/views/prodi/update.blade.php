@extends('layoutadmin.main')
@section('content')
    <h2>Update Prodi</h2>
    <form method="POST" action="/prodi/update/{{ $dataProdi->kd_prodi }}">
        {{ csrf_field() }}
        <input type="hidden" name="kode" value="{{ $dagtaProdi->kd_prodi }}">
        <div class="mb-3">
            <label class="form-label">KODE PRODI</label>
            <input type="text" name="kode" class="form-control" value="{{ $dataProdi->kd_prodi }}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">NAMA PRODI</label>
            <input type="text" name="prodi" class="form-control" value="{{ $dataProdi->nama_prodi }}" required>
        </div>
        <a href="/prodi" class="btn btn-secondary">KEMBALI</a>
        <button type="submit" class="btn btn-primary">UPDATE</button>
    </form>
@endsection