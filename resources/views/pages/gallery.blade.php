@extends('layouts.app')
@section('content')
    <div class="container container-boxes">
            <header id="fh5co-header" role="banner">
                    <div class="header-inner">
                        <h1>Gallery</h1>
                    </div>
            </header>
            <div class="row featurette pb-3">
                @foreach($publish as $published)
                <div class="col-md-6 mt-2">
                <div class="card">
                        <img class="card-img-top" src="/storage/web_gallery/{{$published->fileUpload}}" width="100%">
                </div>
                </div>
                @endforeach
            </div>
    </div>

      
@endsection