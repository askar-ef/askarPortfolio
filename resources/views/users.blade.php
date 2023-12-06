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
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        @if ($user->photo)
                            <img src="{{ asset('storage/' . $user->photo) }}" class="img-fluid rounded-circle" alt="User Photo" width="200">
                        @else
                            <p>No Photo Available</p>
                        @endif

                        <h2 class="mt-3">{{ $user->name }}</h2>
                        <p>{{ $user->email }}</p>

                        <a href="{{ route('edit-photo', $user->id) }}" class="btn btn-primary">Edit Profile</a>

                        <form method="POST" action="{{ route('delete-photo', $user->id) }}" class="mt-3">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete Profile Photo</button>
                        </form>
                    </div>
                </div>
                

                <div class="flex justify-center items-center">
                    <div class="bg-white p-8 rounded shadow-md">
                        <table class="w-full border">
                            <tr class="border-b">
                                <td class="py-2 px-4 text-center">Normal</td>
                                <td class="py-2 px-4 text-center">Square</td>
                                <td class="py-2 px-4 text-center">Thumbnail</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4 text-center">
                                    <img src="{{ asset('storage/' . $user->photo) }}" class="mx-auto img-fluid" alt="User Photo" width="200">
                                </td>
                                <td class="py-2 px-4 text-center">
                                    <img src="{{ asset('storage/photos/squares/' . $user->photo) }}" class="mx-auto img-fluid" alt="User Photo" width="200">
                                </td>
                                <td class="py-2 px-4 text-center">
                                    <img src="{{ asset('storage/photos/thumbnails/' . $user->photo) }}" class="mx-auto img-fluid" alt="User Photo" width="200">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
        
            </div>
        </div>
    </div>
</body>
</html>
@endsection
