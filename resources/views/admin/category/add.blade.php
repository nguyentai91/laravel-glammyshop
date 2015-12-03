@extends('admin.master');
@section('title', 'Admin-Category')
@section('content')
    @if(count($errors) > 0)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
   <div class="col-sm-8 col-sm-offset-3">

       {!! Form::open(array('route' => 'admin.category.store', 'method' => 'POST')) !!}

       <div class="form-group">
           <label for="cate_name">Category Name</label>
           <input type="text" class="form-control" id="name" name="cate_name" placeholder="Please enter category name." onkeyup="ChangeToSlug();">
       </div>
       <div class="form-group">
           <label for="cate_name">Slug</label>
           <input type="text" class="form-control" id="slug" name="slug" placeholder="Please enter category name.">
       </div>
       <div class="form-group">

           <div class=" form-group">
               <label for="parent" class=" control-label">Parent ID</label>
               {{--<div class="col-sm-10">--}}
                   <select class=" col-sm-6 form-control " id="parent" name="parent_id">
                       <option value="0">Please choose category</option>
                       <?php
                            cate_parent($categories);
                       ?>
                   </select>
               {{--</div>--}}
           </div>
       </div>

       <div class="form-group">
           <lable for="oder">Oder</lable>
           <input type="number" id="oder" name="oder" placeholder="Please choose oder.">
       </div>
        <div class="form-group">
        <button type="submit" class="btn btn-default">Save</button>
        </div>
       {!! Form::close() !!}

   </div>

@stop