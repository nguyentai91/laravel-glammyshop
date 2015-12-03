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

        {!! Form::open(array('route' => array('admin.color.update',$colors['id']), 'method' => 'PUT')) !!}
        <div class="form-group">
            <label for="color_name">Color Name</label>
            <input type="text" class="form-control" id="name" name="color_name" placeholder="Please enter color name."
                   value="{!! old('color_name',isset($colors) ? $colors['color_name'] : null) !!}" onkeyup="ChangeToSlug();">
        </div>
        <div class="form-group">
            <label for="color_name">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" placeholder="Please enter color name."
                   value="{!! old('slug',isset($colors) ? $colors['slug'] : null) !!}">
        </div>
        <div class="form-group">
            Select your favorite color:
            <input type="color" name="color" value="{!! old('color',isset($colors) ? $colors['code'] : null) !!}">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-default">Save</button>
        </div>
        {!! Form::close() !!}

    </div>

@stop