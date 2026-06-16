@extends('layouts.app')

@section('title', 'Form Donasi')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow">

    <h1 class="text-2xl font-bold mb-6">
        Form Donasi
    </h1>

    <form action="{{ route('donations.store') }}"
          method="POST"
          class="space-y-4">

        @csrf

        <div>
            <label class="block mb-2 font-medium">
                Nama Donatur
            </label>

            <input type="text"
                   name="name"
                   class="w-full border border-gray-300 rounded-lg p-3">
        </div>

        <div>
            <label class="block mb-2 font-medium">
                Email
            </label>

            <input type="email"
                   name="email"
                   class="w-full border border-gray-300 rounded-lg p-3">
        </div>

        <div>
            <label class="block mb-2 font-medium">
                Pilih Campaign
            </label>

            <select name="campaign_id"
                    class="w-full border border-gray-300 rounded-lg p-3">

                @foreach($campaigns as $campaign)
                    <option value="{{ $campaign->id }}">
                        {{ $campaign->title }}
                    </option>
                @endforeach

            </select>
        </div>

        <div>
            <label class="block mb-2 font-medium">
                Nominal Donasi
            </label>

            <input type="number"
                   name="amount"
                   class="w-full border border-gray-300 rounded-lg p-3">
        </div>

        <div>
            <label class="block mb-2 font-medium">
                Pesan
            </label>

            <textarea name="message"
                      rows="4"
                      class="w-full border border-gray-300 rounded-lg p-3"></textarea>
        </div>

        <button
            type="submit"
            class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg">
            Donasi Sekarang
        </button>

    </form>

</div>
@endsection