@extends('layouts.master')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel">
                <div class="panel-body">
                @if(Session('success'))
                    <script type="text/javascript">
                    $(document).ready(function () {

                        toastr.success('Succesfully Saved');
                    });
                    </script>


                    <div class="alert alert-success">

                    {{ Session('success') }}

                    </div>

                @endif
                @if(Session('error'))
                    <script type="text/javascript">
                            $(document).ready(function () {

                                toastr.error('Something Went Wrong, Please try Again.');
                            });
                    </script>
                    <div class="alert alert-danger">
                    {{ Session('error') }}
                    </div>
                @endif
                @if (count($errors) > 0)
                <script type="text/javascript">
                        $(document).ready(function () {

                            toastr.error('Something Went Wrong, Please try Again.');
                        });
                </script>
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif
                <form role="form"  method="post" action="{{route('post_new_category')}}">
                {{ csrf_field() }}
                <div class="form-group">
                        <label>Choose Service</label>
                        <select class="form-control" style="width: 100%" name="service_type">
                            <option value="">Please Select Service</option>
                            @foreach(config('service_type.service_types') as $service_type=>$service_value)
                            <option value="{{$service_type}}" {{ (Input::old("service_type") == $service_type ? "selected":"") }}>{{$service_value}}</option>
                            @endforeach
                        </select>
                        </div>
                           
                        <div class="form-group">
                        <label>Category</label> 
                        <input type="text" placeholder="Enter Category" class="form-control" name="category_value" value="{{ old('category_value') }}">
                        </div>

                        
                        <div>
                            <button class="btn btn-sm btn-primary m-t-n-xs" type="submit"><strong>Submit</strong></button>
                        </div>
                </form>
                </div>
            </div>
        </div>    
    </div>
    
</div>

@stop
