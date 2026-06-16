@extends('layouts.app')

@section('content')

<div class="max-w-3xl mx-auto mt-10">

    <div class="bg-white shadow-xl rounded-2xl p-8 border border-gray-100">

        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800">
                Edit Campaign
            </h1>

            <p class="text-gray-500 mt-2">
                Perbarui informasi campaign donasi dengan lengkap.
            </p>
        </div>

        <form action="/donasi/{{ $campaign->id }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Judul -->
            <div>
                <label class="block mb-2 font-semibold text-gray-700">
                    Judul Campaign
                </label>

                <input
                    type="text"
                    name="title"
                    value="{{ $campaign->title }}"
                    placeholder="Masukkan judul campaign"
                    class="w-full border border-gray-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <!-- Deskripsi -->
            <div>
                <label class="block mb-2 font-semibold text-gray-700">
                    Deskripsi
                </label>

                <textarea
                    name="description"
                    rows="5"
                    placeholder="Masukkan deskripsi campaign"
                    class="w-full border border-gray-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >{{ $campaign->description }}</textarea>
            </div>

            <!-- Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                <!-- Target -->
                <div>
                    <label class="block mb-2 font-semibold text-gray-700">
                        Target Donasi
                    </label>

                    <input
                        type="number"
                        name="target_donation"
                        value="{{ $campaign->target_donation }}"
                        placeholder="Target Donasi"
                        class="w-full border border-gray-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>

                <!-- Terkumpul -->
                <div>
                    <label class="block mb-2 font-semibold text-gray-700">
                        Dana Terkumpul
                    </label>

                    <input
                        type="number"
                        name="collected_donation"
                        value="{{ $campaign->collected_donation }}"
                        placeholder="Dana Terkumpul"
                        class="w-full border border-gray-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>

            </div>

            <!-- Deadline -->
            <div>
                <label class="block mb-2 font-semibold text-gray-700">
                    Deadline
                </label>

                <input
                    type="date"
                    name="deadline"
                    value="{{ $campaign->deadline }}"
                    class="w-full border border-gray-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <!-- Tombol -->
            <div class="flex gap-3 pt-4">

                <button
                    type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl font-semibold transition duration-200"
                >
                    Update Campaign
                </button>

                <a
                    href="/donasi"
                    class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-6 py-3 rounded-xl font-semibold transition duration-200"
                >
                    Kembali
                </a>

            </div>

        </form>

    </div>

</div>

@endsection