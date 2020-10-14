@extends('layouts.main')
@section('content')
    <div class=" container mx-auto px-4 pt-8">
        <div class="popular-movies">
            <div class=" grid grid-cols-1 ms:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($movies as $movie)
                    <div class="mt-8">
                    <a href="phim/{{$movie['id']}}">
                            <img class="hover:opacity-75" src="{{$movie['hinhanh']}}" alt="parasite">
                        </a>
                        <div class="mt-2">
                            <a href="phim/{{$movie['id']}}" class=" text-lg mt-2 hover:text-gray:300">{{$movie['tenphim']}}</a>
                            <div class="flex items-center text-gray-400 text-sm mt">
                                <svg class="w-4" viewBox="0 0 20 20" fill="#FFFF33">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <span class="ml-1">{{$movie['danhgia']}}</span>
                                <span class="mx-2">|</span>
                                <span>{{$movie['ngaysanxuat']}}</span>
                            </div>
                            <div class="text-gray-400 text-sm">{{$movie['theloai']}}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
