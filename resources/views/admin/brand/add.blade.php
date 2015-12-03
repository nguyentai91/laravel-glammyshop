@extends('admin.master');
@section('title', 'Admin-Brand')
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

        {!! Form::open(array('route' => 'admin.brand.store', 'method' => 'POST')) !!}
        <div class="form-group">
            <label for="brand_name">Brand Name</label>
            <input type="text" class="form-control" id="name" name="brand_name" placeholder="Please enter brand name." onkeyup="ChangeToSlug();">
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" >
        </div>
        <div class="form-group">
            {{--<label  for="">category Name</label>--}}
            <select name="cate[]" id="cate" multiple="multiple" class="row col-sm-12">
                <option value="0">Please choose category</option>
                @foreach($cate as $row)

                    <option value="{{$row['id']}}">{{$row['cate_name']}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Save</button>
        </div>
        {!! Form::close() !!}

    </div>

@stop
@section('script')
<script>

    $("#cate").select2({
        placeholder:'Select Category'
    });
</script>
@stop