@extends('layouts.client.app')

@section('content')
    <main class="main relative w-full">
        <div class="w-fit px-24 font-bold text-2xl pt-16 pb-4">
            <div class="border-b-4 border-[#111]">Pengelolaan</div>
        </div>
        <div class="container mx-auto p-6 font-mono">
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                <div class="w-full overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr
                                class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                <th class="px-4 py-3">No</th>
                                <th class="px-4 py-3">Pangan</th>
                                <th class="px-4 py-3">Penjelasan</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @php
                            $i=1
                            @endphp
                            @foreach($pengelolaan as $data)
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 border">{{$i++}}</td>
                                <td class="px-4 py-3 border">
                                    <div class="flex items-center text-sm">
                                        <div class="relative w-24 h-24 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full"
                                                src="/image/{{$data->img}}"
                                                alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 border">
                                Nama : {{$data->name}} <br>
                                Langkah Pembuatan :{{$data->step}} <br>
                                Manfaat : {{$data->manfaat}} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
