@extends('layouts.app')

@section('content')
<div class="container mb-5">
          <main-app
          :user="{{ json_encode(Auth::user())}}"
          >
        </main-app>
</div>
@endsection
