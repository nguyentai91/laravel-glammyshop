@extends('admin.master')
@section('title', 'Admin-Oder')
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
                    <a href="javascript:;">Oder</a>
                </li>

            </ol>
        </div>

        <div class="panel-body">
            <table class="table table-bordered bordered table-striped table-condensed datatable">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Mail</th>
                    <th>Payment</th>
                    <th>Shipping</th>
                    <th>Total price</th>
                    <th>Status</th>
                    <th>Date</th>

                </tr>
                </thead>
                    <tbody>
                    <tr>

                    </tr>

                    </tbody>


            </table>
        </div>
    </div>
@stop