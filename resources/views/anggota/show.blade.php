@extends('layouts.app')

@section('content')
<div class="min-h-screen flex justify-center items-center bg-gray-100">
    <div class="max-w-md w-full px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <div class="text-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">Detail Anggota</h2>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="col-span-2 sm:col-span-1">
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <p class="mt-1 text-sm text-gray-900">{{ $anggota->name }}</p>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                <p class="mt-1 text-sm text-gray-900">{{ $anggota->alamat }}</p>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <label for="nomor_telepon" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                <p class="mt-1 text-sm text-gray-900">{{ $anggota->nomor_telepon }}</p>
            </div>
            <div class="col-span-2 sm:col-span-1">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <p class="mt-1 text-sm text-gray-900">{{ $anggota->email }}</p>
            </div>
        </div>
    </div>
</div>
@endsection