@extends('layouts.app')

@section('content')

<div class="max-w-3xl mx-auto mt-10">

    <div class="bg-white shadow-xl rounded-2xl p-8 border border-gray-100">

        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800">
                ➕ Tambah Campaign
            </h1>

            <p class="text-gray-500 mt-2">
                Buat campaign donasi baru.
            </p>
        </div>

        <form action="/donasi" method="POST" class="space-y-6">
            @csrf

            <!-- Judul -->
            <div>
                <label class="block mb-2 font-semibold text-gray-700">
                    Judul Campaign
                </label>

                <input
                    type="text"
                    name="title"
                    placeholder="Masukkan judul campaign"
                    class="w-full border border-gray-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-green-500"
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
                    class="w-full border border-gray-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-green-500"
                ></textarea>
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
                        placeholder="Target Donasi"
                        class="w-full border border-gray-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-green-500"
                    >
                </div>

                <!-- Dana -->
                <div>
                    <label class="block mb-2 font-semibold text-gray-700">
                        Dana Terkumpul
                    </label>

                    <input
                        type="number"
                        name="collected_donation"
                        placeholder="Dana Terkumpul"
                        class="w-full border border-gray-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-green-500"
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
                    class="w-full border border-gray-300 rounded-xl p-3 focus:outline-none focus:ring-2 focus:ring-green-500"
                >
            </div>

            <!-- Tombol -->
            <div class="flex gap-3 pt-4">

                <button
                    type="submit"
                    class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-xl font-semibold transition duration-200"
                >
                    🚀 Simpan Campaign
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