@extends('layoutadmin.main')
@section('content')
    <h2>Update Mahasiswa</h2>
    <form method="POST" action="/mahasiswa/update/{{ $dataMhs->nim_mahasiswa }}">
        {{ csrf_field() }}
        <input type="hidden" name="nim" value="{{ $dataMhs->nim_mahasiswa }}">
        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control" value="{{ $dataMhs->nim_mahasiswa }}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">NAMA</label>
            <input type="text" name="nama" class="form-control" value="{{ $dataMhs->nama_mahasiswa }}" required>
          
        </div>
        <div class="mb-3">
            <label class="form-label">ANGKATAN</label>
            <input type="year" name="angkatan" class="form-control" value="{{ $dataMhs->angkatan_mahasiswa }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">PRODI</label>
            <select name="prodi" class="form-control" required>
                <option value="{{ $dataMhs->kd_prodi }}">{{ $dataMhs->nama_prodi }}</option>
                @foreach ($dataProdi as $item)
                    @if ($item->kd_prodi <> $dataMhs->kd_prodi)
                        <option value="{{ $item->kd_prodi }}">{{ $item->nama_prodi }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <a href="/mahasiswa" class="btn btn-secondary">KEMBALI</a>
        <button type="submit" class="btn btn-primary">UPDATE</button>
    </form>
@endsection