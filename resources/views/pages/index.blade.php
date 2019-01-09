@extends('layouts.app')
@section('content')
    <div class="container container-boxes">
            <div class="row featurette pb-3">
                    <div class="col-md-12 mt-2">
                            <img src="/storage/web_imgs/img1.png" width="100%" alt="">
                            <hr>
                    </div>
                        <div class="col-md-8 pt-4 pr-1">
                                <h1 class="text-center mb-0"> <img src="/storage/web_imgs/logo1.png" width="60" alt="">National Irrigation Administration</h1>
                                <h5 class="text-center mt-0">General Santos City</h5>
                                @foreach($publish as $published)
                            <div class="card">
                            <img class="card-img-top" src="/storage/web_gallery/{{$published->fileUpload}}" width="100%">
                                    <div class="card-body">
                                      <h5 class="card-title">{{$published->title}}</h5>
                                      <h6 class="card-subtitle mb-2 text-muted">{{$published->created_at}}</h6>
                                      <p class="card-text text-justify">"{{$published->body}}"</p>
                                      <a href="#" class="card-link">See more</a>
                                    </div>
                            </div>
                            @endforeach
                            {{$publish->links()}}
                        </div>
                        <div class="col-md-4 pl-0 pr-1 pt-2">
                                <clock-app class="my-0"></clock-app>
                                <div class="card">
                                        <img class="card-img-top" src="/storage/web_imgs/img2.png" width="100%">
                                        <div class="card-body">
                                                <h5 class="card-title">Mission and Vision</h5>
                                                <br>
                                                <h6 class="card-subtitle mb-2 text-muted text-center">Mission</h6>
                                                <p class="card-text text-justify">"To construct,operate ,and maintain irrigation systems consistent with integrated
                                                                                water resource management principles to improve agricultural productivity and increase farmers income."</p>
                                                <h6 class="card-subtitle mb-2 text-muted text-center">Vision</h6>
                                                <p class="card-text text-justify">"By 2020, NIA is a professional and efficient irrigation agency contributing
                                                                to inclusive growth of the country and in the improvement of the farmers quality of life."</p>
                                        </div>
                                </div> 
                        </div>                        
            </div>
    </div>

      
@endsection