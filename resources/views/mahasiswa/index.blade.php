@extends('layoutadmin.main')
@section('content')
    <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
              <th>NIM</th>
              <th>NAMA</th>
              <th>PRODI</th>
              <th>ANGKATAN</th>
              <th>
                <a href="/mahasiswa/create" class="btn btn-success">Tambah data</a>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($dataMhs as $item)
                <tr>
                    <td>{{ $item->nim_mahasiswa }}</td>
                    <td>{{ $item->nama_mahasiswa }}</td>
                    <td>{{ $item->nama_prodi }}</td>
                    <td>{{ $item->angkatan_mahasiswa }}</td>
                    <td>
                        <a href="/mahasiswa/edit/{{ $item->nim_mahasiswa }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="/mahasiswa/destroy/{{ $item->nim_mahasiswa }}" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
          </tbody>
    </table>
@endsection