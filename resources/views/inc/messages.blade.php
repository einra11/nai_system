@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
                <i class="fa fa-exclamation-circle fa-2x" aria-hidden="true"></i>
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
        <div class="alert alert-success">
            <i class="fa fa-exclamation-circle fa-3x" aria-hidden="true"></i>
            {{session('success')}}
        </div>
@endif

@if(session('error'))
        <div class="alert alert-danger">
            <i class="fa fa-exclamation-circle fa-3x" aria-hidden="true"></i>
            {{session('error')}}
        </div>
@endif