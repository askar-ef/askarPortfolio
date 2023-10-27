@extends('auth.layouts')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 10 Custom User Registration & Login Tutorial - AllPHPTricks.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="row justify-content-center">
        <h3 class="text-center">Kirim Email</h3>
        <div class="col-md-12 p-12">
            {{-- send email --}}
            @if (session('status'))
                <div class="alert alert-primary" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('post-email') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nama" value="{{ $name }}">
                </div>                
                <div class="form-group my-3">
                    <label for="email">Email Tujuan</label>
                    <input type="email" class = "form-control" name="email" id="email" placeholder="Email Tujuan">
                </div>
                <div class="form-group my-3">
                    <label for="subject">Subjek</label>
                    <input type="subject" class="form-control" name="subject" id="subject" placeholder="Subjek">
                </div>
                <div class="form-group my-3">
                    <label for="name">Body Deskripsi</label>
                    <textarea name="body" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Kirim Email</button>
                </div>
            </form>
        </div>
    </div>
</body>
@endsection