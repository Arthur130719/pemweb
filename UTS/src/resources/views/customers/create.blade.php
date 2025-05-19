@extends('layout.app')

@section('title', 'Tambah Pelanggan')

@section('header_title', 'Tambah Pelanggan')
@section('header_subtitle', 'Masukkan data pelanggan baru.')

@section('content')
    <form action="{{ url('/customers') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Telepon</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
