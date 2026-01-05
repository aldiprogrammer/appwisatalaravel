@extends('layout.template')
@section('content')
    <div class="min-h-screen bg-base-100 rounded-box">
        <h1 class="font-bold text-2xl py-4 px-4">Edit wisata </h1>
        <div class="mt-5 px-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                <div class=" bg-base-150 rounded-box shadow">
                    <div class="p-5">
                        <div role="alert" class="alert alert-info">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="h-6 w-6 shrink-0 stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>Input data wisata dengan benar dan tepat</span>
                        </div>

                        <form action="{{ route('wisata.update', $ws->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put');
                            <div class="mt-3">
                                <select class="select select-neutral w-full" name="kategori">

                                    <option value="{{ $ws->kategori }}">{{ $ws->kategoritr->kategori }}</option>
                                    @foreach ($data['kategori'] as $item)
                                        <option value="{{ $item->id }}">{{ $item->kategori }}</option>
                                    @endforeach
                                </select>
                            </div>



                            <div class="mt-5">
                                <label class="floating-label">
                                    <span>Nama wisata</span>
                                    <input type="text" placeholder="Nama wisata" name="nama" required
                                        class="input input-md w-full" value="{{ $ws->wisata }}" />
                                </label>
                            </div>

                            <div class="mt-5">
                                <label class="floating-label">
                                    <span>Lokas wisata</span>
                                    <input type="text" placeholder="Lokasi wisata" name="lokasi" required
                                        class="input input-md w-full" value="{{ $ws->lokasi }}" />
                                </label>
                            </div>

                            <div class="mt-5">
                                <label class="floating-label">
                                    <span>Latitude</span>
                                    <input type="text" placeholder="Latitude" name="lat" required
                                        class="input input-md w-full" value="{{ $ws->latitude }}" />
                                </label>
                            </div>

                            <div class="mt-5">
                                <label class="floating-label">
                                    <span>Longtitude</span>
                                    <input type="text" placeholder="Longtitude" name="long" required
                                        class="input input-md w-full" value="{{ $ws->longitude }}" />
                                </label>
                            </div>
                    </div>
                </div>
                <div class="bg-base-50 shadow rounded-box">
                    <div class="p-5">
                        <fieldset class="fieldset">
                            <legend class="fieldset-legend">Gambar wisata</legend>
                            <img src="{{ asset('storage/' . $ws->gambar) }}" alt="" class="w-30 h-30">
                            <input type="file" class="file-input w-full" name="gambar" />
                            <label class="label">Max size 2MB</label>
                        </fieldset>

                        <div class="mt-5">
                            <label class="floating-label">
                                <span>Keterangan</span>
                                <textarea name="keterangan" placeholder="Keterangan" class="input input-md w-full h-30">{{ $ws->keterangan }}
                                </textarea>
                            </label>
                        </div>

                        <div class="mt-5">
                            <button class="btn btn-primary"><i class="fas fa-file"></i> Simpan</button>
                            <a href="/wisata" class="btn btn-error text-white"><i class="fas fa-close"></i> Close</a>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
