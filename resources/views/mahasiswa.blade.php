@extends('layouts.master')

@section('container')
    <h1 class="text-center">Data Mahasiswa</h1>
    <div class="mb-4">
    <a href="/mahasiswa/create"><button type="button" class="btn btn-success ">Tambah Data</button></a>
    </div>
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
                {{-- <th scope="col">Nomor Identitas</th> --}}
              </tr>
            </thead>
            <tbody>
              @foreach($mahasiswa as $mahasiswa)
              <tr>
                <th scope="row">{{$mahasiswa->id_mahasiswa}}</th>
                <td>{{$mahasiswa->nama}}</td>
                <td>{{$mahasiswa->nim}}</td>
                <td>{{$mahasiswa->jurusan}}</td>
                <td>{{$mahasiswa->alamat}}</td>
                {{-- <td>{{$mahasiswa->ktm->nomor_identitas}}</td> --}}<td>
                   <a href="{{route('edit',$mahasiswa->id_mahasiswa)}}">
                    <button type="button" class="btn btn-primary">Update</button></a>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection