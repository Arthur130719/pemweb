@extends('layout.app')

@section('title', 'Daftar Pelanggan')

@section('header_title', 'Data Pelanggan')
@section('header_subtitle', 'Berikut adalah daftar pelanggan yang terdaftar.')

@section('content')
    <a href="{{ url('/customers/create') }}" class="btn btn-primary mb-3">Tambah Pelanggan</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($customers as $customer)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>
                        <a href="{{ url('/customers/' . $customer->id . '/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ url('/customers/' . $customer->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada data pelanggan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection