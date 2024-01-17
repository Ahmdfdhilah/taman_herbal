@extends('layouts.client.app')

@section('content')
    <main class="main relative w-full">
        <div class="pb-8 pt-32 flex-col flex">
            <div class="w-fit m-auto font-bold text-2xl">
                <div class="">Yuk Kenalan Sama </div>
                <div class="border-b-4 border-[#111]">Taman Herbal Desa</div>
            </div>
            <div class="py-16 flex px-8 flex flex-col lg:flex-row">
                <div class="container mx-auto p-4 lg:p-8">
                    <div class="text-lg lg:text-xl xl:text-2xl">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt, nihil odit doloremque
                        perspiciatis
                        aliquam libero officiis quisquam, facere reiciendis exercitationem, eligendi corrupti beatae veniam?
                        Natus aperiam vel laborum nulla fuga! Quisquam voluptate ipsum, repellendus necessitatibus ut
                        reprehenderit beatae labore aperiam earum quia, sed porro corporis voluptatibus tempora neque?
                        Voluptates similique aliquam ipsam incidunt eaque dolorem laboriosam eum veritatis non aliquid?
                        Libero, aut ratione veritatis molestiae nulla doloremque tenetur inventore quibusdam voluptatem
                        modi,
                        quos dolorum eius. Facere accusantium minima veritatis illum fuga? Cupiditate ea dolorem architecto.
                        Vitae dicta laborum dolor praesentium! Rem molestias ipsa, libero in sint numquam iure harum aliquid
                        exercitationem quasi nam laudantium accusamus quisquam corporis et delectus blanditiis? Autem
                        deserunt
                        laudantium repudiandae!
                    </div>
                </div>
                <img src="./frontend/students.jpg" alt="" class="w-64 h-64 m-auto lg:m-0">
            </div>
            <div class="text-center">
                <div class="text-md"> "The Earth does not belong to us: we belong to the Earth."</div>
                <div class="text-md font-bold">- Marlee Matlin</div>
            </div>
        </div>
        <div class="w-fit m-auto font-bold text-2xl py-16">
            <div class="border-b-4 border-[#111]">Tanaman</div>
        </div>
        <div class="container mx-auto p-6 font-mono">
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                <div class="w-full overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr
                                class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                <th class="px-4 py-3">No</th>
                                <th class="px-4 py-3">Jenis Tanaman</th>
                                <th class="px-4 py-3">Pembahasan</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @php
                            $i=1
                            @endphp
                            @foreach($tanaman as $data)
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
                                Istilah ilmiah :{{$data->istilah}} <br>
                                Penjelasan : {{$data->penjelasan}} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="w-fit m-auto font-bold text-2xl py-16">
            <div class="border-b-4 border-[#111]">Peta</div>
        </div>
        <div class="px-8 pb-16">
            <div class="">Peta daya dukung dan daya tampung</div>
            <img src="./frontend/map1.jpg" class="lg:w-1/2" alt="">
        </div>
        <div class="px-8 pb-16">
            <div class="">Peta aliran air sungai dan tutupan lahan</div>
            <img src="./frontend/map2.jpg" class="lg:w-1/2" alt="">
        </div>
        <div class="px-8 ">
            <div class="">Peta kerapatan vegetasi</div>
            <img src="./frontend/map3.jpg" class="lg:w-1/2" alt="">
        </div>
    </main>
@endsection
