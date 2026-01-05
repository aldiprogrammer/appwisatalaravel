<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>{{ $data['title'] }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-base-50" style="font-family: 'Poppins',  sans-serif ">
    <div class="min-h-screen flex justify-center bg-slate-100">
        <div class="w-[390px] bg-white shadow-xl">
            {{-- navbar --}}
            <div class="navbar bg-primary shadow-sm">
                <div class="flex-1">
                    <a class="btn btn-ghost text-xl text-white">daisyUI</a>
                </div>
                <div class="flex-none">
                    <div class="dropdown dropdown-end">
                        <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                            <div class="indicator">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                <span class="badge badge-sm indicator-item">8</span>
                            </div>
                        </div>
                        <div tabindex="0" class="card card-compact dropdown-content bg-base-100 z-1 mt-3 w-52 shadow">
                            <div class="card-body">
                                <span class="text-lg font-bold">8 Items</span>
                                <span class="text-info">Subtotal: $999</span>
                                <div class="card-actions">
                                    <button class="btn btn-primary btn-block">View cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown dropdown-end">
                        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                            <div class="w-10 rounded-full">
                                <img alt="Tailwind CSS Navbar component"
                                    src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                            </div>
                        </div>
                        <ul tabindex="-1"
                            class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                            <li>
                                <a class="justify-between">
                                    Profile
                                    <span class="badge">New</span>
                                </a>
                            </li>
                            <li><a>Settings</a></li>
                            <li><a>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- end navbar --}}
            <div class="bg-info m-3 rounded-box h-30 p-4 static">
                <span class="text-white font-bold">Hello Aldi</span>
                <div class="font-[300] text-white">Selamat datang diaplikasi wisata kita</div>
                <div class="mt-8">
                    <input type="text" placeholder="Cari disini" class="input w-full input-lg "
                        style="border-radius: 30px" />
                </div>
            </div>
            <div class="mt-10 mx-3 bg-secondary h-40 rounded-box shadow p-4">
                <span class="text-white"><i class="fas fa-border-all"></i> Daftar menu</span>
                <div></div>
            </div>
        </div>
    </div>
</body>

</html>
