@extends('layouts.admin')

@section('judul', 'Detail Masyarakat')

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

          .btn-primary {
               background: #6c757d;
               border: 1px solid #757d6c;
          }
     </style>
@endsection

@section('header')
     <a href="{{ route('masyarakat.index') }}" class="text-primary">Data Masyarakat</a>
     <a href="#" class="text-grey"></a>
     <a href="#" class="text-grey">Detail Masyarakat</a>
@endsection

@section('content')
     <div class="row">
          <div class="col-lg-6 col-12">
               <div class="card">
                    <div class="card-headr">
                         <div class="text-center">
                              Detail Masyarakat
                         </div>
                    </div>
                    <div class="card-body">
                         <table class="table">
                              <tbody>
                                   <tr>
                                        <th>Nik</th>
                                        <th>:</th>
                                        <th>{{ $masyarakat->nik}}</th>
                                   </tr>
                                   <tr>
                                        <th>Nama</th>
                                        <th>:</th>
                                        <th>{{ $masyarakat->nama}}</th>
                                   </tr>
                                   <tr>
                                        <th>Username</th>
                                        <th>:</th>
                                        <th>{{ $masyarakat->username}}</th>
                                   </tr>
                                   <tr>
                                        <th>Telephone</th>
                                        <th>:</th>
                                        <th>{{ $masyarakat->telp}}</th>
                                   </tr>
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </div>
@endsection