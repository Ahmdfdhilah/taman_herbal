@extends('layouts.admin.app')

@section('title', 'Data Dokumentasi')

@section('content')

<div class="container mx-auto mt-8">
  <div class="max-w-md mx-auto bg-white rounded-md overflow-hidden shadow-md p-6">
    <h2 class="py-4 font-bold text-center">Edit Data Dokumentasi</h2>
    <form action="{{ route('dokumentasi.update', $dokumentasi->id) }}" method="POST" enctype="multipart/form-data">
      @method('PUT')  
      @csrf
      <div class="mb-4">
        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama</label>
        <input type="text" id="name" name="name" class="form-input" placeholder="Nama" value="{{ $dokumentasi->name }}">
        @error('name')
        <small class="text-red-500">{{ $message }}</small>
        @enderror
      </div>
      <div class="mb-4">
        <label for="desc" class="block text-gray-700 text-sm font-bold mb-2">Deskripsi</label>
        <textarea id="desc" name="desc" class="form-textarea" placeholder="Deskripsi">{{ $dokumentasi->desc }}</textarea>
        @error('desc')
        <small class="text-red-500">{{ $message }}</small>
        @enderror
      </div>
      <img src="/image/{{ $dokumentasi->img }}" class="img-fluid mb-4" alt="Preview" width="150">
      <div class="mb-4">
        <label for="img" class="block text-gray-700 text-sm font-bold mb-2">Gambar</label>
        <input type="file" id="img" name="img" class="form-input w-full">
        @error('img')
        <small class="text-red-500">{{ $message }}</small>
        @enderror
      </div>
      <div class="flex items-center justify-between">
        <button class="btn btn-primary px-2 py-1 rounded-md hover:bg-gray-300 bg-blue-500" type="submit">Submit</button>
        <a href="{{ route('dokumentasi.index') }}" class="btn btn-secondary mb-4 px-2 py-1 rounded-md bg-[#B9CD3C] hover:bg-gray-300">&larr; Kembali</a>
      </div>
    </form>
  </div>
</div>

@endsection
