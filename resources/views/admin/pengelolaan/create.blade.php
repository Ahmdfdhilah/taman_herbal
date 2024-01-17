@extends('layouts.admin.app')

@section('title', 'Data Pengelolaan')

@section('content')

<div class="container mx-auto mt-8">
  <div class="max-w-md mx-auto bg-white rounded-md overflow-hidden shadow-md p-6">
    <h2 class="py-4 font-bold text-center">Tambah Data Pengelolaan</h2>
    <form action="{{ route('pengelolaan.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-4">
        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama</label>
        <input type="text" id="name" name="name" class="form-input" placeholder="Nama">
        @error('name')
        <small class="text-red-500">{{ $message }}</small>
        @enderror
      </div>
      <div class="mb-4">
        <label for="step" class="block text-gray-700 text-sm font-bold mb-2">Langkah</label>
        <textarea id="step" name="step" class="form-textarea" placeholder="Langkah"></textarea>
        @error('step')
        <small class="text-red-500">{{ $message }}</small>
        @enderror
      </div>
      <div class="mb-4">
        <label for="manfaat" class="block text-gray-700 text-sm font-bold mb-2">Manfaat</label>
        <textarea id="manfaat" name="manfaat" class="form-textarea" placeholder="Manfaat"></textarea>
        @error('manfaat')
        <small class="text-red-500">{{ $message }}</small>
        @enderror
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
        <a href="{{ route('pengelolaan.index') }}" class="btn btn-secondary mb-4 px-2 py-1 rounded-md bg-[#B9CD3C] hover:bg-gray-300">&larr; Kembali</a>
      </div>
    </form>
  </div>
</div>

@endsection
