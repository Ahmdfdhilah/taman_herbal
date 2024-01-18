@extends('layouts.client.app')

@section('content')
    <main class="main relative w-full">
        <div class="w-fit px-24 font-bold text-2xl pt-16 pb-4">
            <div class="border-b-4 border-[#111]">Dokumentasi</div>
        </div>
        <div class="flex flex-wrap justify-center lg:justify-normal gap-10 pt-12 pb-48 px-8" data-aos="fade-up" data-aos-delay="200">
            @foreach ($paginatedData as $index => $item)
                <div class="block rounded-xl w-full lg:w-[30%] bg-white shadow-xl">
                    <div>
                        <img class="rounded-t-xl object-cover w-full h-48 mt-2" src="/image/{{ $item['img'] }}"
                            alt=""/>
                    </div>

                    <div class="p-6">
                        <h5 class="mb-2 text-lg font-bold tracking-wide text-neutral-800">
                           Nama : {{ $item['name'] }}
                        </h5>
                        <p class="mb-2 text-base text-neutral-500">
                        kegiatan : {{ $item['desc'] }}
                        </p>

                    </div>
                    
                </div>
            @endforeach
        </div>

        <nav class="w-fit mx-auto bg-gray-100 p-3 my-8 rounded-xl">
            <ul class="list-style-none flex">
                @if ($paginatedData->previousPageUrl())
                    <li>
                        <a class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm text-neutral-600 transition-all duration-300 hover:bg-neutral-300"
                            href="{{ $paginatedData->previousPageUrl() }}">Previous</a>
                    </li>
                @endif

                @foreach ($paginatedData->getUrlRange(1, $paginatedData->lastPage()) as $page => $url)
                    <li @if ($page == $paginatedData->currentPage()) aria-current="page" @endif>
                        <a class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm {{ $page == $paginatedData->currentPage() ? 'font-medium text-primary-700' : 'text-neutral-600' }} transition-all duration-300 hover:bg-neutral-300"
                            href="{{ $url }}">{{ $page }} @if ($page == $paginatedData->currentPage())
                                <span
                                    class="absolute -m-px h-px w-px overflow-hidden whitespace-nowrap border-0 p-0 [clip:rect(0,0,0,0)]">(current)</span>
                            @endif
                        </a>
                    </li>
                @endforeach

                @if ($paginatedData->nextPageUrl())
                    <li>
                        <a class="relative block rounded-full bg-transparent px-3 py-1.5 text-sm text-neutral-600 transition-all duration-300 hover:bg-neutral-300"
                            href="{{ $paginatedData->nextPageUrl() }}">Next</a>
                    </li>
                @endif
            </ul>
        </nav>
    </main>

@endsection
