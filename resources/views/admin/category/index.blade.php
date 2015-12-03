@extends('admin.master');
@section('title', 'Admin-Category')
@section('content')
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))

            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
    @endforeach
    <div class="col-md-2">
        <a href="{{url('admin/category/create')}}" class="btn btn-success">Create</a>

    </div>
    <div class="panel">

        <div class="panel-heading border">

            <ol class="breadcrumb mb0 no-padding">
                <li>
                    <a href="">Add Category</a>
                </li>

            </ol>

        </div>

        <div class="panel-body">

            <table class="table table-bordered bordered table-striped table-condensed datatable">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Parent</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php $stt = 0;?>
                @foreach($categories as $category)
                    <?php $stt += 1?>
                    <tr>
                        <td>{!! $stt !!}</td>
                        <td>{!! $category['cate_name'] !!}</td>
                        <td>
                            @if($category['parent_id'] == 0)
                                {!! "None" !!}
                            @else
                                <?php
                                    $data = DB::table('category')->where('id',$category['parent_id'])->first();
                                    echo $data->cate_name;
                                ?>
                            @endif
                        </td>
                        <td><a href="{!! route('admin.category.edit',$category['id']) !!}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                        <td><a onclick="return confirm('Are you sure!')" href="{!! route('admin.category.destroy',$category['id']) !!}"><span class="glyphicon glyphicon-trash"></span></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $categories->render() !!}
        </div>
    </div>


@stop