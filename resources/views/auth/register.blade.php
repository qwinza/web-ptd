@extends('app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card shadow-lg p-4" style="width: 100%; max-width: 400px; background-color: #3c4247; color: #ffffff;">
        <h3 class="text-center mb-4">Register</h3>
        <form method="POST" action="/register">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label text-white">Nama</label>
                <input type="text" name="name" class="form-control bg-dark text-white border-0" id="name" required autofocus>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label text-white">Email</label>
                <input type="email" name="email" class="form-control bg-dark text-white border-0" id="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label text-white">Password</label>
                <input type="password" name="password" class="form-control bg-dark text-white border-0" id="password" required>
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label text-white">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" class="form-control bg-dark text-white border-0" id="password_confirmation" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Daftar</button>
        </form>
        <div class="mt-3 text-center">
            <small class="text-white-50">Sudah punya akun? <a href="{{ route('login') }}" class="text-info">Login di sini</a></small>
        </div>
    </div>
</div>
@endsection
