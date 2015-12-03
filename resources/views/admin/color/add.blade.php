@extends('admin.master');
@section('title', 'Admin-Color')
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

        {!! Form::open(array('route' => 'admin.color.store', 'method' => 'POST')) !!}
        <div class="form-group">
            <label for="color_name">Color Name</label>
            <input type="text" class="form-control" id="name" name="color_name" placeholder="Please enter color name." onkeyup="ChangeToSlug();">
        </div>
        <div class="form-group">
            <label for="color_name">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" placeholder="Please enter color name.">
        </div>

        <div class="form-group">
            Select your favorite color:
            <input type="color" name="color">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-default">Save</button>
        </div>
        {!! Form::close() !!}

    </div>

@stop