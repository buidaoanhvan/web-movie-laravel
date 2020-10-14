@extends('layouts.main')
@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-8 flex flex-col md:flex-row">
            <img src="{{ $movie['hinhanh'] }}" alt="{{ $movie['tenphim'] }}" class="w-64 md:w-96">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">{{ $movie['tenphim'] }}</h2>
                <div class="flex flex-wrap items-center text-gray-400">
                    <svg class="w-4" viewBox="0 0 20 20" fill="#FFFF33">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <span class="ml-1">{{ $movie['danhgia'] }}</span>
                    <span class="mx-2">|</span>
                    <span>{{ $movie['ngaysanxuat'] }}</span>
                    <span class="mx-2">|</span>
                    <span>{{ $movie['theloai'] }}</span>
                </div>
                <p class="text-gray-300 mt-8">
                    {{ $movie['mota'] }}
                </p>
                <div class="mt-12">
                    <h4 class="text-white font-semibold">Diễn Viên Chính</h4>
                    <div class="flex mt-4">
                        <div>
                            <div class="text-sm text-gray-400">{{ $movie['dienvien'] }}</div>
                        </div>
                    </div>
                </div>
                <div class="mt-12">
                    <button id="toggle"
                        class="flex modal-open items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration">
                        <svg class="w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="ml-2"> Xem Ngay</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div id="content" class="p-4">
        <iframe src="{{ $movie['link'] }}" width="100%" height="640" frameborder="0" allow="autoplay; fullscreen"
            allowfullscreen></iframe>
    </div>
    <script>
        var toggle = document.getElementById("toggle");
        var content = document.getElementById("content");
        toggle.addEventListener("click", function() {
            content.style.display = (content.dataset.toggled ^= 1) ? "block" : "none";
        });

    </script>
@endsection
