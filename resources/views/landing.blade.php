<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maucargo</title>

    {{-- for tailwind --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- for alpinejs --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    {{-- navbar --}}

    <div class="navbar bg-base-100 border-gray-200 px-2 sm:px-12 py-2.5 rounded dark:bg-gray-800 text-xl">
        <div class="navbar-start">
            <div class="dropdown" x-data="{ open: false }">
                <label tabindex="0" class="btn btn-ghost lg:hidden" @click="open = !open">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </label>
                <ul tabindex="0" class="p-2 mt-3 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52"
                    x-show="open" @click.outside="open = false">
                    <li><a>Item 1</a></li>
                    <li><a>Item 2</a></li>
                    <li><a>Item 3</a></li>
                </ul>
            </div>
            <a class="px-0 text-xl normal-case btn btn-ghost"><img src="{{ ('images/logo.png') }}" alt=""
                    class="w-full h-full"></a>
        </div>
        <div class="hidden navbar-center lg:flex">
            <ul class="p-0 menu menu-horizontal">
                <li><a>Item 1</a></li>
                <li><a>Item 2</a></li>
                <li><a>Item 3</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            <a class="btn">Get started</a>
        </div>
    </div>

    {{-- navbar end --}}
    {{-- header --}}
    <div class="flex min-h-screen mx-auto container-xl header ">
        <div class="grid m-auto sm:grid-cols-6 place-items-center ">
            <!-- ... -->
            <div class="col-start-2 bg-cyan-500">
                <img src="{{('images/logoName.png')}}">
            </div>
            <div class="w-full h-full col-span-2 bg-red-500">
                <div class="headline">
                    <p class="4xl">FINEST TRANSPORT SERVICE</p>
                    <p class="xl">Transport quality to enhance your business</p>
                </div>
            </div>
        </div>
    </div>
    {{-- header end --}}
    {{-- content --}}
    <div class="flex min-h-screen mx-auto content1">
        <p class="w-full text-center 8xl">OUR SERVICES</p>
    </div>
    <div class="flex min-h-screen mx-auto content2">
        <p class="w-full text-center 8xl">ABOUT US</p>
    </div>
    <div class="flex min-h-screen mx-auto content3">
        <p class="w-full text-center 8xl">BLOG</p>
    </div>
    {{-- content end --}}
    {{-- footer --}}
    {{-- footer end --}}

</body>

</html>
