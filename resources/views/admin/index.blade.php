@extends('layout.template')
@section('content')
   <div class="bg-base-100 min-h-screen px-5 py-5 rounded-box">
          <i class="fas fa-home"></i><h1 class="text-2xl font-bold">Halaman Home</h1>

  <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 mt-5">
            <div class="row-span-2 bg-warning rounded-box">
                 <div class="stat place-items-center">
                    <div class="stat-title font-bold text-white">Jumlah Pengguna</div>
                    <div class="stat-value text-white">10</div>
                    <div class="stat-desc text-white">Pengguna</div>
                </div>
            </div>
            <div class="row-span-2 bg-error rounded-box">
                 <div class="stat place-items-center">
                    <div class="stat-title font-bold text-white">Data Wisata</div>
                    <div class="stat-value text-white">4.200</div>
                    <div class="stat-desc text-white">Wisata</div>
                </div>
            </div>
            <div class="row-span-2 bg-primary rounded-box">
                 <div class="stat place-items-center">
                    <div class="stat-title font-bold text-white">Data Kategori</div>
                    <div class="stat-value text-white">10</div>
                    <div class="stat-desc text-white">Kategori</div>
                </div>
            </div>
             <div class="row-span-2 bg-success rounded-box">
                <div class="stat place-items-center">
                    <div class="stat-title text-white font-bold">Data Amin</div>
                    <div class="stat-value text-white">5</div>
                    <div class="stat-desc text-white">Admin</div>
                </div>
             </div>
            
        </div>

    </div>
@endsection