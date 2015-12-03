@extends('admin.master')
@section('title', 'Admin-Product')
@section('content')

    <div class="panel">
        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))

                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                @endif
            @endforeach
        </div>
        <div class="panel-heading border col-md-10">
            <ol class="breadcrumb mb0 no-padding">
                <li>
                    <a href="javascript:;">Product</a>
                </li>

            </ol>
        </div>
        <div class="col-md-2">
            <a href="{{url('admin/product/create')}}" class="btn btn-success">Create</a>

        </div>
        <div class="panel-body">
            <table class="table table-bordered bordered table-striped table-condensed datatable">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Catrgory</th>
                    <th>Brand</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Quantity</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
            <?php $stt =0;?>
            @foreach($products as $product)
                <?php $stt++;?>
                    <tbody>
                        <tr>
                            <td>{{$stt}}</td>
                            <td>{{$product->product_name}}</td>
                            <td>{{$product->cate_name}}</td>
                            <td>{{$product->brand_name}}</td>
                            <td><img src="{!! url('upload/'.$product->image_name)!!}" width="50px"> </td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->discount}}</td>
                            <td>{{$product->qty}}</td>
                            <td>{{$product->description}}</td>
                            <td><a href="{!! route('admin1.product.edit',[$product->slug,$product->id]) !!}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                            <td>
                                {!! Form::open(array('route' => array('admin.product.destroy',$product->id), 'method' => 'DELETE')) !!}
                                    {{--<input type="hidden" name="_token" value="{!! csrf_token() !!}">--}}
                                    <button onclick="return confirm('Are you sure!')" type="submit" id="delete" name="delete">Delete</button>
                                {!! Form::close() !!}
                            </td>
                        </tr>

                    </tbody>

                @endforeach

            </table>
            {!! $products->render() !!}
        </div>
    </div>


@stop