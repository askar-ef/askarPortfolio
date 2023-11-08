{{-- @foreach ($users as $user)
    <p>{{ $user->name }}</p>
    <p>{{ $user->email }}</p>
    <img src="{{asset('storage/'.$user->photo )}}" width="150px">
    <!-- Tampilkan informasi pengguna lainnya sesuai kebutuhan -->
@endforeach --}}

{{-- 
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Photo</th>
            <!-- Tambahkan kolom lain sesuai kebutuhan -->
        </tr>
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->photo }}</td>
            <!-- Tampilkan informasi pengguna lainnya sesuai kebutuhan -->
        </tr>
    </table> --}}
@extends('auth.layouts')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 10 Custom User Registration & Login Tutorial - AllPHPTricks.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            @if ($user->photo)
                                <img src="{{ asset('storage/' . $user->photo) }}" width="400" alt="User Photo">
                            @else
                                No Photo Available
                            @endif
                        </div>
                    </td>
                    <td class="center-content">
                            <a href="{{ route('edit', $user->id) }}" class="btn btn-primary">Edit</a>
                        <form method="POST" action="{{ route('delete-photo') }}">
                            @csrf
                            @method('POST')
                            <button type="submit" class="btn btn-danger">Hapus Foto Profil</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
@endsection