@extends('layouts.admin')

@section('judul', 'Form Tambah Petugas')

@section('css')
     <style>
          .text-primary:hover{
               text-decoration: underline
          }

          .text-grey {
               color: #6c757d;
          }

          .text-grey:hover {
               color: #6c757d;
          }
     </style>
@endsection

@section('header')
     <a href="{{ route('pengaduan.index') }}" class="text-primary">Data Petugas</a>
     <a href="#" class="text-grey"></a>
     <a href="#" class="text-grey">Form Tambah Petugas</a>
@endsection

@section('content')
          <div class="container">
               <div class="card-header mr-3">
                    Form Rambah Petugas
               </div>
               <div class="card-body">
                    <form action="{{ route('petugas.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                         <label for="nama_petugas">Nama Petugas</label>
                         <input type="text" name="nama_petugas" id="nama_petugas" class="form-control" required placeholder="Nama Petugas">
                    </div>
                    <div class="form-group">
                         <label for="username">Username</label>
                         <input type="text" name="username" id="username" class="form-control" required placeholder="Username">
                    </div>
                    <div class="form-group">
                         <label for="password">Password</label>
                         <input type="password" name="password" id="password" class="form-control" required placeholder="Password">
                    </div>
                    <div class="form-group">
                         <label for="telp">Telp</label>
                         <input type="number" name="telp" id="telp" class="form-control" required placeholder="+62">
                    </div>
                    <div class="form-group">
                         <label for="level">Level</label>
                         <div  class="input-group mt-3">
                              <select name="level" id="level" class="custom-select">
                                   {{-- <option value="petugas" selected>Pilih Level (Default Petugas)</option> --}}
                                   <option value="admin">Admin</option>
                                   <option value="petuagas"  selected>Petugas</option>
                              </select>
                         </div>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
               </div>
               <div class="col-lg-6 col-12">
                    @if (Session::has('username'))
                         <div class="alert alert-danger">
                              {{ Session::get('username' )}}
                         </div>
                    @endif
                    @if ($errors->any())
                         @foreach ($errors->all() as $error)
                              <div class="alert alert-danger">
                                   {{ $error }}
                              </div>
                         @endforeach
                    @endif
               </div>
          </div>
@endsection
