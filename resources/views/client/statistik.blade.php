@extends('layouts.client.app')

@section('content')
    <main class="main relative w-full">
        <div class="w-fit px-24 font-bold text-2xl pt-16 pb-4">
            <div class="border-b-4 border-[#111]">Statistik</div>
        </div>
      <div class="w-3/4 m-auto">
        <p>  Data perhitungan pertumbuhan tanaman selama 30 hari dari tanggal 11 Januari 2024 s.d. 21 Januari 2024</p>
        <img src="./frontend/map1.jpg" class="py-4" alt="">
      </div>
      <p class="w-3/4 m-auto">Berikut tautan infografis pertumbuhan : <a href="#" class="text-blue-300">Tautan</a></p>
    </main>
@endsection
