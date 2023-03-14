@extends('layouts.admin')

@section('header', 'Halaman Dashboad')

@section('judul', 'Halaman Dashboad')


@section('content')
     <div class="row text-center">
          <div class="col-xl-3 col-md-6 mb-4">
               <div class="card border-left-warning shadow h-100 py-2">
                   <div class="card-body">
                       <div class="row no-gutters align-items-center">
                           <div class="col mr-2">
                               <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                   Petugas</div>
                               <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $petugas }}</div>
                           </div>
                           <div class="col-auto">
                               <i class="fas fa-comments fa-2x text-gray-300"></i>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

           <div class="col-xl-3 col-md-6 mb-4">
               <div class="card border-left-warning shadow h-100 py-2">
                   <div class="card-body">
                       <div class="row no-gutters align-items-center">
                           <div class="col mr-2">
                               <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                   Masyarakat</div>
                               <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $masyarakat }}</div>
                           </div>
                           <div class="col-auto">
                               <i class="fas fa-comments fa-2x text-gray-300"></i>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

          <div class="col-xl-3 col-md-6 mb-4">
               <div class="card border-left-warning shadow h-100 py-2">
                   <div class="card-body">
                       <div class="row no-gutters align-items-center">
                           <div class="col mr-2">
                               <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                   Pengaduan Pending</div>
                               <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $proses }}</div>
                           </div>
                           <div class="col-auto">
                               <i class="fas fa-comments fa-2x text-gray-300"></i>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           
          <div class="col-xl-3 col-md-6 mb-4">
               <div class="card border-left-warning shadow h-100 py-2">
                   <div class="card-body">
                       <div class="row no-gutters align-items-center">
                           <div class="col mr-2">
                               <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                   Pengaduan Proses</div>
                               <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $proses }}</div>
                           </div>
                           <div class="col-auto">
                               <i class="fas fa-comments fa-2x text-gray-300"></i>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

          <div class="col-xl-3 col-md-6 mb-4">
               <div class="card border-left-warning shadow h-100 py-2">
                   <div class="card-body">
                       <div class="row no-gutters align-items-center">
                           <div class="col mr-2">
                               <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                   Pengaduan selesai</div>
                               <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $selesai }}</div>
                           </div>
                           <div class="col-auto">
                               <i class="fas fa-comments fa-2x text-gray-300"></i>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
     </div>
@endsection