<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ URL::asset('public/img/logo.png') }}" type="image/gif" sizes="16x16">
    <title>Hay24H</title>
    <link rel="stylesheet" href=" {{ URL::asset('css/main.css') }}">
    <style>
        .modal {
            transition: opacity 0.25s ease;
        }

        body.modal-active {
            overflow-x: hidden;
            overflow-y: visible !important;
        }

        #content {
            display: none;
        }

    </style>
</head>

<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-2 py-3">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="/">
                        <img width="80" src="{{ URL::asset('public/img/logo.png') }}" alt="">
                    </a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="/" class="hover:text-gray-300">Phim Mới</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="/theloai/Hành Động" class="hover:text-gray-300">Hành Động</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="/theloai/Kinh Dị" class="hover:text-gray-300">Kinh Dị</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="/theloai/Hài Hước" class="hover:text-gray-300">Hài Hước</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="/theloai/Tình Cảm" class="hover:text-gray-300">Tình Cảm</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="/theloai/Hoạt Hình" class="hover:text-gray-300">Hoạt Hình</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <div class="relative mt-3 md:mt-0">
                    <form action="./" method="get">
                        <input type="text" name="timkiem"
                            class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline"
                            placeholder="Tìm kiếm">
                    </form>
                    <div class=" absolute top-0">
                        <svg class="w-4 mt-2 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer class="page-footer font-small blue pt-10">
        <div class="footer-copyright text-center py-3">© 2020 Copyright
            <a href="">| Movies</a>
        </div>
    </footer>
</body>

</html>
