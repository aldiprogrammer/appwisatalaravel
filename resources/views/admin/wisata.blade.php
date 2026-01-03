@extends('layout.template')
@section('content')
    <div class="bg-base-100 min-h-screen py-5 px-5 rounded-box">
        <h1 class="font-bold text-2xl">Halaman Wisata</h1>
        <div class="my-5">
            <a href="./tambahwisata" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah data</a>
        </div>
        <div class="mt-5">
            <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100">
                <table class="table">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Nama</th>
                            <th>Gambar</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data['wisata'] as $item)
                            <tr>
                                <th>1</th>
                                <td>Cy Ganderton</td>
                                <td>Quality Control Specialist</td>
                                <td>Blue</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
