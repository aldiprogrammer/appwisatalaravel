@extends('layout.templateapp')
@section('content')
    <div class="bg-info m-3 rounded-box h-30 p-4 static">
        <span class="text-white font-bold">Hello Aldi</span>
        <div class="font-[300] text-white">Selamat datang diaplikasi wisata kita</div>
        <div class="mt-8">
            <input type="text" placeholder="Cari disini" class="input w-full input-lg " style="border-radius: 30px" />
        </div>
    </div>
    <div class="mt-10 mx-3 bg-secondary h-40 rounded-box shadow p-4">
        <span class="text-white"><i class="fas fa-border-all"></i> Daftar menu</span>
        <div class="mt-5 grid grid-cols-4">
            @foreach ($data['kategori'] as $item)
                <div class="text-center">
                    <center>
                        <img class="w-10" src="{{ asset('storage/' . $item->icon) }}" alt="">
                    </center>
                    <small class="text-white">{{ $item->kategori }}</small>
                </div>
            @endforeach
        </div>
    </div>

    <div class="mx-3 my-4">
        <small class="text-success"><i class="fas fa-star"></i> Wisata Favorit</small>
        <div class="mt-3">
            <div class="grid grid-cols-2 gap-3">
                @foreach ($data['wisata'] as $item)
                    <div class="card bg-base-100 shadow-lg">
                        <figure class="h-40 overflow-hidden">
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->wisata }}"
                                class="w-full h-full object-cover" />
                        </figure>

                        <div class="card-body">
                            <h3 class="text-1xl font-[500]">
                                {{ $item->wisata }}
                            </h3>
                            <small class="text-success">
                                <i class="fas fa-location"></i> {{ $item->lokasi }} <i class="fas fa-filter"></i>
                                {{ $item->kategoritr->kategori }}
                            </small>
                            <a href="/detail/{{ $item->id }}"
                                class="btn btn-success btn-sm w-full rounded-full text-white">Kunjungi</a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
