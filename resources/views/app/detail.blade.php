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
            <div class="text-gray"><i class="fas fa-location-dot"></i> {{ $detail->lokasi }}</div>
            <div class="mt-3">
                <!-- name of each tab group should be unique -->

                <!-- name of each tab group should be unique -->
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
                        <i class="fas fa-star"></i> Komentar
                    </label>
                    <div class="tab-content bg-base-100 p-2">
                        <div class="chat chat-start">
                            <div class="chat-image avatar">
                                <div class="w-10 rounded-full">
                                    <img alt="Tailwind CSS chat bubble component"
                                        src="https://img.daisyui.com/images/profile/demo/kenobee@192.webp" />
                                </div>
                            </div>
                            <div class="chat-bubble">It was said that you would, destroy the Sith, not join them.</div>
                        </div>
                        <div class="chat chat-start">
                            <div class="chat-image avatar">
                                <div class="w-10 rounded-full">
                                    <img alt="Tailwind CSS chat bubble component"
                                        src="https://img.daisyui.com/images/profile/demo/kenobee@192.webp" />
                                </div>
                            </div>
                            <div class="chat-bubble">It was you who would bring balance to the Force</div>
                        </div>
                        <div class="chat chat-start">
                            <div class="chat-image avatar">
                                <div class="w-10 rounded-full">
                                    <img alt="Tailwind CSS chat bubble component"
                                        src="https://img.daisyui.com/images/profile/demo/kenobee@192.webp" />
                                </div>
                            </div>
                            <div class="chat-bubble">Not leave it in Darkness</div>
                        </div>

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
        <button class="btn btn-success btn-sm rounded-full w-full sticky "><i class="fas fa-location-dot"></i>Kunjungi
            wisata</button>
    </div>
@endsection
