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

        {!! Form::open(array('route' => array('admin.size.update',$size['id']), 'method' => 'PUT')) !!}
        <div class="form-group">
            <label for="size">Size</label>
            <input type="text" class="form-control" id="name" name="size" placeholder="Please enter size."
                    value="{!! old('size',isset($size) ? $size['size_name'] : null) !!}" onkeyup="ChangeToSlug();">
        </div>
        <div class="form-group">
            <label for="size">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" placeholder="Please enter size."
                   value="{!! old('slug',isset($size) ? $size['slug'] : null) !!}">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-default">Save</button>
        </div>
        {!! Form::close() !!}

    </div>

@stop