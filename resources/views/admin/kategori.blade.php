@extends('layout.template')
@section('content')
    <div class="bg-base-100 min-h-screen px-5 py-5 rounded-box">
        <h1 class="font-bold text-2xl">Data Kategori</h1>
        <div class="mt-5">
            <div class="my-3">
                <button class="btn btn-primary" onclick="my_modal_3.showModal()"><i class="fas fa-plus"></i> Tambah
                    kategori</button>

                <dialog id="my_modal_3" class="modal">
                    <div class="modal-box">
                        <form method="dialog">
                            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                        </form>
                        <h3 class="text-lg font-bold">Tambah data</h3>
                        <div class="mt-4">
                            <form action="{{ route('kategori.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <label class="floating-label">
                                    <span>Kategori</span>
                                    <input type="text" placeholder="Kategori" name="kategori" required
                                        class="input input-md w-full" />
                                </label>

                                <fieldset class="fieldset">
                                    <legend class="fieldset-legend">Icon</legend>
                                    <input type="file" class="file-input w-full" name="icon" />
                                    <label class="label">Max size 2MB</label>
                                </fieldset>
                                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                            </form>
                        </div>
                    </div>
                </dialog>



            </div>



            <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100">
                <table class="table">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Icon</th>
                            <th>Opsi</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data['kategori'] as $item)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $item->kategori }}</td>
                                <td>
                                    <div class="rounded-full">
                                        <img class="w-20 rounded-full" src="{{ asset('storage/' . $item->icon) }}"
                                            alt="">
                                    </div>
                                </td>
                                <td>
                                    <button class="btn btn-soft btn-warning"
                                        onclick="my_modal_{{ $item->id }}.showModal()"><i class="fas fa-pen"></i>
                                        Edit</button>

                                </td>
                            </tr>


                            <dialog id="my_modal_{{ $item->id }}" class="modal">
                                <div class="modal-box">
                                    <form method="dialog">
                                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                    </form>
                                    <h3 class="text-lg font-bold">Edit data</h3>
                                    <div class="mt-5">
                                        <form action="{{ route('update', $item->id) }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <label class="floating-label">
                                                <span>Kategori</span>
                                                <input type="text" placeholder="Kategori" value="{{ $item->kategori }}"
                                                    name="kategori" required class="input input-md w-full" />
                                            </label>

                                            <fieldset class="fieldset">
                                                <legend class="fieldset-legend">Icon</legend>
                                                <input type="file" class="file-input w-full" name="icon" />
                                                <label class="label">Max size 2MB</label>
                                            </fieldset>
                                            <button type="submit" class="btn btn-primary mt-3">Edit</button>
                                        </form>
                                    </div>
                                </div>
                            </dialog>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
