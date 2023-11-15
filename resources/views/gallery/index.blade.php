@extends('auth.layouts')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <div class="row">
                        @if(count($galleries) > 0)
                        @foreach ($galleries as $gallery)
                        <div class="col-sm-2">
                            <div>
                                <a class="example-image-link" href="{{asset('storage/posts_image/'.$gallery->picture)}}" data-lightbox="roadtrip" data-title="{{$gallery->description}}">
                                    <img class="example-image img-fluid mb-2" src="{{asset('storage/posts_image/'.$gallery->picture)}}" alt="image-1" />
                                </a>
                                <a href="{{ route('gallery.edit', $gallery->id) }}" class="btn btn-warning btn-sm mt-2">EDIT</a>
                                <a href="{{ route('gallery.destroy', $gallery->id) }}" class="btn btn-danger btn-sm mt-2">DELETE</a>
                            </a>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <h3>Tidak ada data.</h3>
                        @endif
                        <div class="d-flex">
                            {{ $galleries->links() }}
                        </div>
                    </div>
                </div>
                    <a class="btn btn-primary mx-2 my-2" href="{{ route('gallery.create') }}">POST</a>
                </div>
            </div>
        </div>
    </div>


</body>
@endsection
