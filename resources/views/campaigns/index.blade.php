@extends('layouts.app')

@section('title', 'Daftar Donasi')

@section('content')

<div class="max-w-6xl mx-auto">

    {{-- Notifikasi --}}
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-xl mb-6">
            {{ session('success') }}
        </div>
    @endif

    {{-- Header --}}
    <div class="flex items-center justify-between mb-6">

        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                📢 Daftar Campaign
            </h1>

            <p class="text-gray-500 mt-1">
                Kelola campaign donasi dengan mudah.
            </p>
        </div>

        <a href="/donasi/create"
           class="bg-green-600 hover:bg-green-700 text-white px-5 py-3 rounded-xl shadow transition duration-200">
            + Tambah Campaign
        </a>

    </div>

    {{-- Table Card --}}
    <div class="bg-white shadow-xl rounded-2xl overflow-hidden border border-gray-100">

        <div class="overflow-x-auto">

            <table class="w-full">

                {{-- Table Head --}}
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-4 text-left">Judul</th>
                        <th class="p-4 text-left">Target</th>
                        <th class="p-4 text-left">Terkumpul</th>
                        <th class="p-4 text-center">Aksi</th>
                    </tr>
                </thead>

                {{-- Table Body --}}
                <tbody>

                    @forelse($campaigns as $c)

                        <tr class="border-t hover:bg-gray-50 transition">

                            {{-- Judul --}}
                            <td class="p-4 font-medium text-gray-800">
                                {{ $c->title }}
                            </td>

                            {{-- Target --}}
                            <td class="p-4 text-gray-600">
                                Rp {{ number_format($c->target_donation, 0, ',', '.') }}
                            </td>

                            {{-- Terkumpul --}}
                            <td class="p-4 text-gray-600">
                                Rp {{ number_format($c->collected_donation, 0, ',', '.') }}
                            </td>

                            {{-- Aksi --}}
                            <td class="p-4">

                                <div class="flex items-center justify-center gap-2">

                                    {{-- Edit --}}
                                    <a href="{{ route('donasi.edit', $c->id) }}"
                                       class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition">
                                        Edit
                                    </a>

                                    {{-- Delete --}}
                                    <form action="{{ route('donasi.destroy', $c->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Yakin ingin menghapus campaign ini?')">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition">
                                            Hapus
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="4" class="p-6 text-center text-gray-500">
                                Belum ada campaign.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection