@if ($errors->count() > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if (session('success'))
    <div class="alert alert-success">
        <strong>Success!</strong> {{session('success')}}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        <strong>Error!</strong> {{session('error')}}
    </div>
@endif
