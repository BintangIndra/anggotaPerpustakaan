@extends('layouts.app')

@section('content')
<div class="min-h-screen flex justify-center items-center bg-gray-100">
    <div class="max-w-4xl w-full px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <div class="text-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">Daftar Anggota</h2>
        </div>

        <a href="{{ route('anggota.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">Buat</a>


        <div class="overflow-x-auto">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Alamat</th>
                        <th class="px-4 py-2">Nomor Telepon</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($anggotas as $anggota)
                    <tr>
                        <td class="border px-4 py-2">{{ $anggota->name }}</td>
                        <td class="border px-4 py-2">{{ $anggota->alamat }}</td>
                        <td class="border px-4 py-2">{{ $anggota->nomor_telepon }}</td>
                        <td class="border px-4 py-2">{{ $anggota->email }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('anggota.show', $anggota->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Lihat</a>
                            <a href="{{ route('anggota.edit', $anggota->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">Edit</a>
                            <form action="{{ route('anggota.destroy', $anggota->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection