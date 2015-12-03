@extends('admin.master');
@section('title', 'Admin-Color')
@section('content')
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))

            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
    @endforeach
    <div class="col-md-2">
        <a href="{{url('admin/color/create')}}" class="btn btn-success">Create</a>

    </div>
    <div class="panel">

        <div class="panel-heading border">

        </div>

        <div class="panel-body">

            <table class="table table-bordered bordered table-striped table-condensed datatable">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php $stt = 0?>
                @foreach($colors as $color)
                    <?php $stt += 1?>
                    <tr>
                        <td>{!! $stt !!}</td>
                        <td><p style="color: {!! $color['code'] !!}">{!! $color['color_name'] !!}</p></td>
                        <td><a href="{!! route('admin.color.edit',$color['id']) !!}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                        <td><a onclick="return confirm('Are you sure!')" href="{!! route('admin.color.destroy',$color['id']) !!}"><span class="glyphicon glyphicon-trash"></span></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@stop