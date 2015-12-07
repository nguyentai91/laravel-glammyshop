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
            <table id="users" class="table table-bordered bordered table-striped table-condensed datatable">
                <thead>
                <tr>
                    <th class="col-md-3">Name</th>
                    <th class="col-md-3">Address</th>
                    <th class="col-md-3">Phone</th>
                    <th class="col-md-3">Email</th>
                    <th class="col-md-3">Payment</th>
                    <th class="col-md-3">Shipping method</th>
                    <th class="col-md-3">Total price</th>
                    <th class="col-md-3">Status</th>
                    <th class="col-md-3">Date</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
@stop
@section('script')
    <script>
        $(document).ready(function() {
            oTable = $('#users').DataTable({
                destroy: true,
                "processing": true,
                "serverSide": true,
                "ajax": "/api/order/list",
                "columns": [
                    {data: 'fullname',          name: 'Name'},
                    {data: 'address',           name: 'Address'},
                    {data: 'phone',             name: 'Phone'},
                    {data: 'email',             name: 'Email'},
                    {data: 'payment',           name: 'Payment'},
                    {data: 'shipping_method',   name: 'Shipping_method'},
                    {data: 'total_price',       name: 'total'},
                    {data: 'status',            name: 'status'},
                    {data: 'created_at',        name: 'created_at'}
                ]
            });
        });
    </script>
@stop