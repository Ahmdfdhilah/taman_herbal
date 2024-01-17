@extends('layouts.admin.app')

@section('title', 'Data Tanaman')

@section('content')

<div class="container mx-auto mt-8">
  <div class="max-w-md mx-auto bg-white rounded-md overflow-hidden shadow-md p-6">
    <h2 class="py-4 font-bold text-center">Edit Tanaman</h2>
    <form action="{{ route('tanaman.update', $tanaman->id) }}" method="POST" enctype="multipart/form-data">
      @method('PUT')  
      @csrf
      <div class="mb-4">
        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama</label>
        <input type="text" id="name" name="name" class="form-input" placeholder="Nama" value="{{ $tanaman->name }}">
        @error('name')
        <small class="text-red-500">{{ $message }}</small>
        @enderror
      </div>
      <div class="mb-4">
        <label for="istilah" class="block text-gray-700 text-sm font-bold mb-2">Istilah</label>
        <input type="text" id="istilah" name="istilah" class="form-input" placeholder="Istilah" value="{{ $tanaman->istilah }}">
        @error('istilah')
        <small class="text-red-500">{{ $message }}</small>
        @enderror
      </div>
      <div class="mb-4">
        <label for="penjelasan" class="block text-gray-700 text-sm font-bold mb-2">Penjelasan</label>
        <textarea id="penjelasan" name="penjelasan" class="form-textarea" placeholder="Penjelasan">{{ $tanaman->penjelasan }}</textarea>
        @error('penjelasan')
        <small class="text-red-500">{{ $message }}</small>
        @enderror
      </div>
      <div class="mb-4">
        <img src="/image/{{ $tanaman->img }}" class="img-fluid" width="150">
      </div>
      <div class="mb-4">
        <label for="img" class="block text-gray-700 text-sm font-bold mb-2">Gambar</label>
        <input type="file" id="img" name="img" class="form-input w-full">
        @error('img')
        <small class="text-red-500">{{ $message }}</small>
        @enderror
      </div>
      <div class="flex items-center justify-between">
        <button class="btn btn-primary px-2 py-1 rounded-md hover:bg-gray-300 bg-blue-500" type="submit">Submit</button>
        <a href="/admin/tanaman" class="btn btn-secondary mb-4 px-2 py-1 rounded-md bg-[#B9CD3C] hover:bg-gray-300">&larr; Kembali</a>
      </div>
    </form>
  </div>
</div>

@endsection
