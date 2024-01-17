@extends('layouts.admin.app')

@section('title', 'Data Tanaman')

@section('content')

<div class="flex flex-col min-h-screen justify-between">
  <div class="container mx-auto mt-8 px-8">
    <div class="mb-4">    <a href="{{ route('tanaman.create') }}" class="btn btn-primary px-2 py-1 rounded-md hover:bg-gray-300 bg-blue-500">Tambah Data</a>
    </div>

    @if ($message = Session::get('message'))
    <div class="alert alert-success">
      <strong>Berhasil</strong>
      <p>{{ $message }}</p>
    </div>
    @endif

    <div class="overflow-x-auto">
      <table class="table w-full border border-gray-300 bg-[#fff]">
        <thead class="bg-gray-200">
          <tr>
            <th class="py-2 px-4 border">No</th>
            <th class="py-2 px-4 border">Nama</th>
            <th class="py-2 px-4 border">Istilah</th>
            <th class="py-2 px-4 border">Penjelasan</th>
            <th class="py-2 px-4 border">Gambar</th>
            <th class="py-2 px-4 border">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @php
          $i=1
          @endphp
          @forelse ($tanaman as $data)
            <tr>
              <td class="py-2 px-4 border">{{ $i++ }}</td>
              <td class="py-2 px-4 border">{{ $data->name }}</td>
              <td class="py-2 px-4 border">{{ $data->istilah }}</td>
              <td class="py-2 px-4 border">{{ $data->penjelasan }}</td>
              <td class="py-2 px-4 border">
                <img src="/image/{{ $data->img }}" class="img-fluid" alt="" width="90">
              </td>
              <td class="py-2 px-4 border">
                <div class="flex">
                  <a href="{{ route('tanaman.edit', $data->id) }}" class="btn btn-warning px-2 py-1 rounded-md bg-yellow-500">Edit</a>
                  <form action="{{ route('tanaman.destroy', $data->id) }}" method="POST" class="ml-2">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger bg-red-500 px-2 py-1 rounded-md">Hapus</button>
                  </form>
                </div>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="6" class="py-2 px-4 border text-center">Tidak ada data tanaman</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
