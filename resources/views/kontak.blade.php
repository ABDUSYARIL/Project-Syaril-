@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card shadow col-md-6 mx-auto mt-5">
        <div class="card-header bg-success text-white">
            <h4>Kontak Saya</h4>
        </div>
        <div class="card-body">
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>No HP:</strong> {{ $no_hp }}</p>
        </div>
    </div>
</div>

@endsection