@extends('layouts.app')
@section('content')
    <div class="mb-5 container container-boxes">
        <h1 class="text-center">Admin Publish</h1>
        <form method="POST" action="{{ route('publish.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="title">Title</label>
                  <input name="title" class="form-control" placeholder="Title" type="text" required />
                </div>
                <div class="form-group my-3">
                  <label for="exampleFormControlTextarea1">Body</label>
                  <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                </div>
                <input class="my-2" type="file" name="fileUpload">
                <br>
                <button class="form-group btn btn-primary" type="submit">Publish</button>
        </form>
    </div>
@endsection