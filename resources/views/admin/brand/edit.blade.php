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

        {!! Form::open(array('route' => array('admin.brand.update',$brands['id']), 'method' => 'PUT')) !!}
        <div class="form-group">
            <label for="brand_name">Brand Name</label>
            <input type="text" class="form-control" id="brand_name" name="brand_name" placeholder="Please enter brand name."
                    value="{!! old('brand_name', isset($brands) ? $brands['brand_name'] : null) !!}">
        </div>
        <div class="form-group">
            <label for="brand_name">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug"
                   value="{!! old('slug', isset($brands) ? $brands['slug'] : null) !!}">
        </div>
        <div class="form-group">
            <select name="cate[]" id="cate" multiple="multiple" class="col-sm-12">
                <option value="0">Please choose category</option>
                @foreach($cate as $row)

                    <?php $catelist = array() ?>
                        @foreach($lists as $list)
                            <?php $catelist[] = $list['id'] ?>
                        @endforeach

                    <option
                            <?php if(in_array($row['id'],$catelist)) { echo "selected ='selected'"; }?>
                            value="{!! $row['id'] !!}">{{ $row['cate_name'] }}</option>
                @endforeach
            </select>

            {{--{{dd($catelist)}}--}}

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