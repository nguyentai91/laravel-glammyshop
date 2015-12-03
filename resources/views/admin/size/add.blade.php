@extends('admin.master');
@section('title', 'Admin-Size')
@section('content')
    @if(count($errors) > 0)
        <div class="alert-danger text-center">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="col-sm-8 col-sm-offset-3">

        {!! Form::open(array('route' => 'admin.size.store', 'method' => 'POST')) !!}
        <div class="form-group">
            <label for="size">Size</label>
            <input type="text" class="form-control" id="name" name="size" placeholder="Please enter size." onkeyup="ChangeToSlug();">
        </div>
        <div class="form-group">
            <label for="size">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" placeholder="Please enter size.">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-default">Save</button>
        </div>
        {!! Form::close() !!}

    </div>

@stop