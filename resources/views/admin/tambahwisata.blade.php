@extends('layout.template')
@section('content')
    <div class="min-h-screen bg-base-100 rounded-box">
        <h1 class="font-bold text-2xl py-4 px-4">Tambah wisata</h1>
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

                        <div class="mt-3">
                            <label class="floating-label">
                                <span>Kategori</span>
                                <input type="text" placeholder="Kategori" name="kategori" required
                                    class="input input-md w-full" />
                            </label>
                        </div>



                        <div class="mt-5">
                            <label class="floating-label">
                                <span>Nama wisata</span>
                                <input type="text" placeholder="Nama wisata" name="nama" required
                                    class="input input-md w-full" />
                            </label>
                        </div>

                        <div class="mt-5">
                            <label class="floating-label">
                                <span>Lokas wisata</span>
                                <input type="text" placeholder="Lokasi wisata" name="nama" required
                                    class="input input-md w-full" />
                            </label>
                        </div>

                        <div class="mt-5">
                            <label class="floating-label">
                                <span>Latitude</span>
                                <input type="text" placeholder="Latitude" name="nama" required
                                    class="input input-md w-full" />
                            </label>
                        </div>

                        <div class="mt-5">
                            <label class="floating-label">
                                <span>Longtitude</span>
                                <input type="text" placeholder="Longtitude" name="nama" required
                                    class="input input-md w-full" />
                            </label>
                        </div>
                    </div>
                </div>
                <div class="bg-base-50 shadow rounded-box">

                </div>
            </div>
        </div>
    </div>
@endsection
