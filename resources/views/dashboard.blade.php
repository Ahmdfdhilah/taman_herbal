@extends('layouts.admin.app')

@section('title', 'Selamat Datang, Admin!')

@section('content')
    <div class="container mx-auto p-4">

        <h1 class="text-3xl font-semibold text-gray-800 mb-4">Admin Dashboard</h1>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">

            <a href="{{ route('tanaman.index') }}"
                class="card bg-white p-6 rounded-lg shadow mb-4 block hover:bg-gray-50 transition duration-300">
                <div class="mb-4">
                    <img src="/frontend/map3.jpg" alt="Image" class="w-full h-32 object-cover rounded-t-lg">
                </div>
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-semibold text-gray-800">Tanaman</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="h-6 w-6 text-blue-500">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                        </path>
                    </svg>
                </div>
                <p class="text-gray-600 mt-2">Lihat dan edit data Tanaman.</p>
            </a>

            <a href="{{ route('pengelolaan.index') }}"
                class="card bg-white p-6 rounded-lg shadow mb-4 block hover:bg-gray-50 transition duration-300">
                <div class="mb-4">
                    <img src="/frontend/map1.jpg" alt="Image"
                        class="w-full h-32 object-cover rounded-t-lg">
                </div>
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-semibold text-gray-800">Pengelolaan</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="h-6 w-6 text-yellow-500">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 20c-1.18 0-2.18-.47-3-1.24m0 0c-1.26-1.26-2.34-3-3-4H5c-.66 1-1.74 2.74-3 4C2.82 20.53 3.82 22 5 22h14c1.18 0 2.18-.47 3-1.24c-.54-1.01-1.2-2.28-1.93-3.76l-1.89-4.92L12 2L9.82 4.29l-1.89 4.92c-.73 1.49-1.39 2.75-1.93 3.76c.82.77 1.82 1.24 3 1.24h14z">
                        </path>
                    </svg>
                </div>
                <p class="text-gray-600 mt-2">Lihat dan edit data pengelolaan</p>
            </a>

            <a href="{{ route('dokumentasi.index') }}"
                class="card bg-white p-6 rounded-lg shadow mb-4 block hover:bg-gray-50 transition duration-300">
                <div class="mb-4">
                    <img src="/frontend/map2.jpg" alt="Image" class="w-full h-32 object-cover rounded-t-lg">
                </div>
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-semibold text-gray-800">Dokumentasi</h2>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="h-6 w-6 text-yellow-500">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 20c-1.18 0-2.18-.47-3-1.24m0 0c-1.26-1.26-2.34-3-3-4H5c-.66 1-1.74 2.74-3 4C2.82 20.53 3.82 22 5 22h14c1.18 0 2.18-.47 3-1.24c-.54-1.01-1.2-2.28-1.93-3.76l-1.89-4.92L12 2L9.82 4.29l-1.89 4.92c-.73 1.49-1.39 2.75-1.93 3.76c.82.77 1.82 1.24 3 1.24h14z">
                        </path>
                    </svg>
                </div>
                <p class="text-gray-600 mt-2">Lihat dan edit data dokumentasi</p>
            </a>
            
        </div>

    </div>
@endsection
