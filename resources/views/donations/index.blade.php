@extends('layouts.app')

@section('title', 'Daftar Donasi')

@section('content')

<div class="bg-white p-6 rounded-lg shadow">

    <h1 class="text-2xl font-bold mb-6">
        Daftar Donasi
    </h1>

    <div class="overflow-x-auto">

        <table class="w-full border-collapse">

            <thead>

                <tr class="bg-gray-200">

                    <th class="border p-3">Nama</th>
                    <th class="border p-3">Email</th>
                    <th class="border p-3">Campaign</th>
                    <th class="border p-3">Nominal</th>
                    <th class="border p-3">Pesan</th>

                </tr>

            </thead>

            <tbody>

                @foreach($donations as $donation)

                <tr>

                    <td class="border p-3">
                        {{ $donation->name }}
                    </td>

                    <td class="border p-3">
                        {{ $donation->email }}
                    </td>

                    <td class="border p-3">
                        {{ $donation->campaign->title }}
                    </td>

                    <td class="border p-3">
                        Rp {{ number_format($donation->amount) }}
                    </td>

                    <td class="border p-3">
                        {{ $donation->message }}
                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection