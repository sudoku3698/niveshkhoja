@extends('layouts.master')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel">
                <div class="panel-body">
                    <a href="{{route('add_new_category')}}"><button class="btn btn-primary" >Add New Category</button></a>
                <table id="example2" class="table table-striped table-bordered table-hover">
                    <thead>
                     <tr>
                        <th>Category ID</th>

                        <th>Category Value</th>

                        <th>Service Tyoe</th>

                        <th>Created At</th>

                        <th>Edit</th>

                        <th>Delete</th>
                     </tr>

                    </thead>

                     <tbody>

                     @foreach($categories as $category)

                        <tr>

                            <td>{{$category->id}}</td>

                            <td>{{$category->category_value}}</td>

                            <td>{{$category->service_type}}</td>

                            <td>{{$category->created_at}}</td>

                            <td><a href="{{route('edit_category',['cat_id'=>$category->id])}}" class="btn btn-info btn-sm">Edit</a></td>

                            <td><a href="{{route('delete_category',['cat_id'=>$category->id])}}" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</a></td>
                        </tr> 

                    @endforeach

                    </tbody>

                </table>
                </div>
            </div>
        </div>    
    </div>
    
</div>

@stop
