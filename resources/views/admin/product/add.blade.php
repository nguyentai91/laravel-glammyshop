@extends('admin.master');
@section('title', 'Admin-Product')
@section('frontpage', 'Product')
@section('content')

    @if(count($errors) > 0)
        <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
    @endif
<div class="col-sm-8 col-sm-offset-2">
{!! Form::open(array('route' => 'admin.product.store', 'method' => 'post', 'enctype' => 'multipart/form-data')) !!}

    <input type="hidden" name="_token" value="{!! csrf_token() !!}">

    {{--product--}}
    <div class="form-group">
        <label class="col-sm-3 control-label">Product Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control input-sm" name="name" id="name" onkeyup="ChangeToSlug();">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Slug</label>
        <div class="col-sm-10">
            <input type="text" class="form-control input-sm" name="slug" id="slug">
        </div>
    </div>

    {{--category--}}
    <div class="form-group">
        <label class="col-sm-3 control-label">Category</label>
        <div class="col-sm-10">
            <select class="form-control" name="cate_id">
                @foreach($categories as $category)
                <option value="{{$category['id']}}">{{$category['cate_name']}}</option>
                @endforeach
            </select>
        </div>
    </div>

    {{--Brand--}}
    <div class="form-group">
        <label class="col-sm-3 control-label">Brand</label>
        <div class="col-sm-10">
            <select class="form-control" name="brand_id">
                @foreach($brands as $brand)
                <option value="{{$brand['id']}}">{{$brand['brand_name']}}</option>
                @endforeach
            </select>
        </div>
    </div>

    {{--size--}}
    <div class="form-group">
        <label for="" class="col-sm-3 control-label">Size</label>
        <div class="col-sm-10">
            <select name="size[]" id="size" class="col-sm-12" multiple="multiple">
                @foreach($size as $row)
                    <option value="{!! $row['id'] !!}">{!! $row['size_name'] !!}</option>
                @endforeach
            </select>
        </div>
    </div>

    {{--illustration--}}
    <div class="col-md-10 form-group">
        <label class="col-sm-3 control-label">Illustration</label>
        <input type="file" name="illustration" id="illustration" >
    </div>

    {{--color--}}
    <div class="form_group">
        <label for="" class="col-sm-3 control-label">Color</label>
        <div class="col-sm-10">
            <select name="color[]" id="color" class="col-sm-12" multiple="multiple">
                @foreach($color as $data)
                    <option value="{!! $data['id'] !!}">{!! $data['color_name'] !!}</option>
                @endforeach
            </select>
        </div>
    </div>

    {{--price--}}
    <div class="form-group">
        <label class="col-sm-3 control-label">Price</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="price">
        </div>
    </div>

    {{--discount--}}
    <div class="form-group">
        <label class="col-sm-3 control-label">Discount</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="discount">
        </div>
    </div>

    {{--quantity--}}
    <div class="form-group">
        <label class="col-sm-3 control-label">Quantity</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="qty">
        </div>
    </div>

    {{--description--}}
    <div class="form-group">
        <label class="col-sm-3 control-label">Description</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="3" name="description"></textarea>
        </div>
    </div>

    {{--checkbox--}}
    <div class="row">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="col-sm-2">
                <p>Show</p>
                <label class="switch switch mb15">
                    <input type="hidden" name="show" value="0">
                    <input checked="checked" type="checkbox" name="show" value="1">
                        <span>
                            <i class="handle"></i>
                        </span>
                </label>
            </div>
            <div class="col-sm-2">
                <p>Feature</p>
                <label class="switch switch mb15">
                    <input  type="hidden" name="feature" value="0">
                    <input  type="checkbox" name="feature" value="1">
                        <span>
                            <i class="handle"></i>
                        </span>
                </label>
            </div>
        </div>
    </div>

    {{--image attached--}}
    <div class="col-md-10 col-md-offset-2">
        <label class="col-sm-2 control-label">Images attached</label>
        <input type="file" name="images[]" id="images" multiple>
    </div>
    <div class="form-group">
        <input type="submit" value="SAVE" name="submit">
    </div>

{!! Form::close() !!}
</div>
@stop

@section('script')
    <script>

        $("#color").select2({
            placeholder:'Select Color'
        });
        $("#size").select2({
            placeholder:'Select size'
        });

    </script>
@stop