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
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data['wisata'] as $item)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $item->kategoritr->kategori }}</td>
                                <td>{{ $item->wisata }}</td>
                                <td><img src="{{ asset('storage/' . $item->gambar) }}" alt="" class="w-20 h-20"></td>
                                <td>
                                    <a href="editwisata/{{ $item->id }}" class="btn btn-info btn-sm"><i
                                            class="fas fa-pen"></i> Edit</a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
