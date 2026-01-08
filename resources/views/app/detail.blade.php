@extends('layout.templateapp')
@section('content')
    <div class="mx-3 my-4 p-3 bg-primary h-50 rounded-box bg-cover bg-center shadow-xl"
        style="background-image: url('{{ asset('storage/' . $detail->gambar) }}');">
        <div class="flex justify-between">
            <div>
                <div class="h-10 w-10 rounded-full bg-white/70 flex items-center justify-center">
                    <a href="/app" style="text-decoration: none">
                        <i class="fas fa-angle-left"></i>
                    </a>
                </div>
            </div>

            <div>
                <div class="h-10 w-10 bg-white/70 flex items-center justify-center rounded-full">
                    <i class="far fa-heart"></i>
                </div>
            </div>

        </div>
    </div>
    <div class="mx-3 bg-base-100 rounded-box shadow">
        <div class="p-3">
            <div class="mb-1 text-dark font-bold  text-xl"> <i class="fas fa-map"></i> {{ $detail->wisata }}</div>
            <div class="text-success"><i class="fas fa-location-dot"></i> {{ $detail->lokasi }}</div>
            <div class="mt-3">
                <!-- name of each tab group should be unique -->

                <!-- name of each tab group should be unique -->

                @if (session('success'))
                    <div id="toast-success" class="toast toast-center toast-middle" style="display: none;">
                        <div class="alert alert-success text-white">
                            <span>{{ session('success') }}</span>
                        </div>
                    </div>
                @endif
                <div class="tabs tabs-lift">
                    <label class="tab">
                        <input type="radio" name="my_tabs_4" checked="checked" />
                        <i class="fas fa-book"></i>
                        Keterangan
                    </label>
                    <div class="tab-content bg-base-100 p-2 text-sm">
                        {{ $detail->keterangan }}
                    </div>

                    <label class="tab">
                        <input type="radio" name="my_tabs_4" />
                        <i class="fas fa-location-dot"></i>
                        Lokasi
                    </label>
                    <div class="tab-content bg-base-100  p-2 text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit.
                        <div class="mt-3">

                            <div data-lat={{ $detail->latitude }} data-long={{ $detail->longitude }}
                                data-nama={{ $detail->wisata }} id="map" class="w-full h-[200px] rounded-lg shadow">
                            </div>
                        </div>
                    </div>

                    <label class="tab">
                        <input type="radio" name="my_tabs_4" />
                        <i class="fas fa-comment-dots"></i> Komentar
                    </label>
                    <div class="tab-content bg-base-100 p-2">



                        @if ($komentar->isEmpty())
                            <div class="text-center text-sm text-error m-10 font-[300]">Data komentar belum ada, jadilah
                                orang pertama
                                yang
                                memberi
                                komentar
                            </div>
                        @else
                            @foreach ($komentar as $item)
                                <div class="chat chat-start">
                                    <div class="chat-image avatar">
                                        <div class="w-10 rounded-full">
                                            <img alt="Tailwind CSS chat bubble component"
                                                src="https://static.vecteezy.com/system/resources/previews/009/346/271/non_2x/3d-render-icon-bubble-speech-illustration-free-png.png" />
                                        </div>
                                    </div>
                                    <div class="chat-bubble text-sm">
                                        {{ $item->komentar }}
                                        <div> <small class="text-xs text-success">{{ $item->tanggal }}</small></div>

                                    </div>
                                </div>
                            @endforeach
                        @endif


                        <div class="mt-5">
                            <form class="flex gap-2" method="post" action="{{ route('komentar', $detail->id) }}">
                                @csrf
                                <input type="text" placeholder="Masukkan komentar..." class="input input-bordered w-full"
                                    name="komentar" required />
                                <button class="btn btn-primary">
                                    <i class="far fa-paper-plane"></i>Kirim
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="mx-3 mt-4">
        <a target="_blank" href="https://www.google.com/maps?q={{ $detail->latitude }},{{ $detail->longitude }}"
            class="btn btn-success btn-sm rounded-full w-full sticky text-white "><i
                class="fas fa-location-dot"></i>Kunjungi
            wisata</a>
    </div>
@endsection
